<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of GetEppCode
 *
 * @author inbs
 */
class GetEppCode extends Call
{
    public $action = "domains/:domain/eppcode";
    
    public $type = parent::TYPE_GET;
}