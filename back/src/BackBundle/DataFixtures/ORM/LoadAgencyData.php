<?php

namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Agency;


class LoadAgencyData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $file = 1; // used for increment
        $filename = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'csv'. DIRECTORY_SEPARATOR. "agency.csv"; // get the CSV file
        $output = file_get_contents($filename) . "\n";
        $enc = mb_detect_encoding($output, mb_list_encodings(), true);

        // Opens the csv file read-only, and places the file pointer at the beginning
        if (($gestion = fopen($filename, "r")) !== FALSE) {
            $datas = fgetcsv($gestion, null, ';'); //used to skip first line (header of the CSV)

            //we browse the csv file
            while (($datas = fgetcsv($gestion, null, ';')) !== FALSE) {

                //condition to encode in UTF-8
                if($enc!=="UTF-8") {
                    $datas = array_map("utf8_encode", $datas);
                }
                //get datas in csv
                $name = $datas[0];
                $country = $datas[1];
                $categories = $datas[2];
                $adress = $datas[4];
                $adress2 = $datas[5];
                $postalCodes = $datas[6];
                $city = $datas[7];
                $phoneNumber = $datas[8];
                $fax = $datas[9];
                $presentation = $datas[10];
                $expertise = $datas[11];
                $notes = $datas[12];
                $creationDate = $datas[13];
                $staffNumber = $datas[14];
                $revenue = $datas[15];
                $website = $datas[16];
                $tvaNumber = $datas[17];
                $numberDuns = $datas[18];

                //set datas
                $agency = new Agency();
                $agency->setName($name);
                $agency->setCountry($country);
                $agency->setCategories($categories);
                $agency->setAdress($adress);
                $agency->setAdress2($adress2);
                $agency->setPostalCode($postalCodes);
                $agency->setCity($city);
                $agency->setPhoneNumber($phoneNumber);
                $agency->setFax($fax);
                $agency->setPresentation($presentation);
                $agency->setExpertise($expertise);
                $agency->setNotes($notes);
                $agency->setCreationDate(new \DateTime($creationDate));
                $agency->setStaffNumber($staffNumber);
                $agency->setRevenue($revenue);
                $agency->setWebsite($website);
                $agency->setTvaNumber($tvaNumber);
                $agency->setNumberDuns($numberDuns);

                $manager->persist($agency);
                $file++;
            }

            //add datas in db
            $manager->flush();
            fclose($gestion);
        }

    }
}