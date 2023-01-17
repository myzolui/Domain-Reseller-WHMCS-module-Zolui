<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of SaveNameServers
 *
 * @author inbs
 */
class SaveNameServers extends Call
{
    public $action = "domains/:domain/nameservers";

    public $type = parent::TYPE_POST;
}