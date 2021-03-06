<?php

namespace AppBundle\Service;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\SoftMain;

class SeeAlso
{

    /** @var ObjectManager */
    private $em;

    /** @var AwesomeSearch */
    private $awesomeSearch;

    /**@var BoolsAsTags */
    private $boolsAsTags;

    /**
     * SeeAlso constructor.
     * @param EntityManagerInterface $em
     * @param AwesomeSearch $awesomeSearch
     * Use AwesomeSearch to give an array of softwares same as one
     */
    public function __construct(EntityManagerInterface $em, AwesomeSearch $awesomeSearch, BoolsAsTags $boolsAsTags)
    {
        $this->em = $em;
        $this->awesomeSearch = $awesomeSearch;
        $this->boolsAsTags = $boolsAsTags;

    }

    /**
     * @param $software
     * @return string
     * Give a string with all tags of given software, to look for same softwares.
     */
    public function getListTagsToString($software) {

        $softMains = $this->em->getRepository(SoftMain::class)->createQueryBuilder('s')
            ->where('s.name LIKE :name')
            ->setParameter('name', $software)
            ->getQuery()->getResult();


        $query = "";

        foreach($softMains as $softMain) {
            $listTags = $softMain->getTags();
            foreach($listTags as $tag) {
                $query .= $tag->getName();
                $query .= " ";
            }
        }

        $bools = [];
        foreach($softMains as $software) {
            $bools = $this->boolsAsTags->getBoolsBySoftware($software);
        }

        foreach($bools as $bool) {
            $query .= $bool["entitie"];
        }

        return $query;
    }

    /**
     * @param $software
     * @param $nb
     * @return array
     */
    public function getListOfSameSoftwares($software, $nb) {
        $query = $this->getListTagsToString($software->getName());

        $result = $this->getAwesomeSearch()->search($query);
        $resultCut = array_slice($result, 1, $nb);
        $list = [];
        foreach($resultCut as $software) {
            $seeAlso = [];
            $seeAlso["name"] = $software["name"];
            $seeAlso["slug"] = $software["slug"];
            $list[] = $seeAlso;
        }
        return $list;
    }

    /**
     * @return mixed
     */
    public function getAwesomeSearch()
    {
        return $this->awesomeSearch;
    }

}