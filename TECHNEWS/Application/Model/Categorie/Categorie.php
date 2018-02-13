<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 15:30
 */

namespace Application\Model\Categorie;


class Categorie
{
    private $IDCATEGORIE,
            $LIBELLECATEGORIE,
            $ROUTECATEGORIE;

    /**
     * @return IDCATEGORIE
     */
    public function getIDCATEGORIE()
    {
        return $this->_IDCATEGORIE;
    }

    /**
     * @return LIBELLECATEGORIE
     */
    public function getLIBELLECATEGORIE()
    {
        return $this->_LIBELLECATEGORIE;
    }

    /**
     * @return ROUTECATEGORIE
     */
    public function getROUTECATEGORIE()
    {
        return $this->_ROUTECATEGORIE;
    }

}