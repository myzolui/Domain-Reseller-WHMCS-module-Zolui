<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of GetDns
 *
 * @author inbs
 */
class GetDns extends Call
{
    public $action = "domains/:domain/dns";
    
    public $type = parent::TYPE_GET;
}