<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of DeleteNameServer
 *
 * @author inbs
 */
class DeleteNameServer extends Call
{
    public $action = "domains/:domain/nameservers/delete";
    
    public $type = parent::TYPE_POST;
}