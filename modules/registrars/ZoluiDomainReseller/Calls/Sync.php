<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class Sync extends Call
{
    public $action = "domains/:domain/sync";
    
    public $type = parent::TYPE_POST;
}