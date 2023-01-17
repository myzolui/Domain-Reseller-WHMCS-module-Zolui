<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class GetRegistrarLock extends Call
{
    public $action = "domains/:domain/lock";
    
    public $type = parent::TYPE_GET;
}