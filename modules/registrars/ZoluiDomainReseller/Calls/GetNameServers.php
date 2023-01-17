<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class GetNameServers extends Call
{
    public $action = "domains/:domain/nameservers";
    
    public $type = parent::TYPE_GET;
}