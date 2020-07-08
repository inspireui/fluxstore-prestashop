<?php
/**
 * 2007-2018 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\Module\LinkList\Core\Grid\Definition\Factory;

use PrestaShop\PrestaShop\Core\Grid\Action\Row\RowActionCollection;
use PrestaShop\PrestaShop\Core\Grid\Action\Row\Type\LinkRowAction;
use PrestaShop\PrestaShop\Core\Grid\Action\Row\Type\SubmitRowAction;
use PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollection;
use PrestaShop\PrestaShop\Core\Grid\Column\Type\Common\PositionColumn;
use PrestaShop\PrestaShop\Core\Grid\Column\Type\Common\ActionColumn;
use PrestaShop\PrestaShop\Core\Grid\Column\Type\DataColumn;
use PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory;

/**
 * Class LinkBlockDefinitionFactory.
 */
final class LinkBlockDefinitionFactory extends AbstractGridDefinitionFactory
{
    const FACTORY_ID = 'link_widget_grid_';

    /**
     * @var array
     */
    private $hook;

    /**
     * LinkBlockDefinitionFactory constructor.
     *
     * @param array $hook
     */
    public function __construct(array $hook)
    {
        $this->hook = $hook;
    }

    /**
     * {@inheritdoc}
     */
    protected function getId()
    {
        return self::FACTORY_ID . $this->hook['id_hook'];
    }

    /**
     * {@inheritdoc}
     */
    protected function getName()
    {
        return $this->hook['name'] . ' ' . $this->hook['title'];
    }

    /**
     * {@inheritdoc}
     */
    protected function getColumns()
    {
        return (new ColumnCollection())
            ->add((new DataColumn('id_link_block'))
                ->setName($this->trans('ID', [], 'Modules.Linklist.Admin'))
                ->setOptions([
                    'field' => 'id_link_block',
                ])
            )
            ->add((new DataColumn('block_name'))
                ->setName($this->trans('Name of the block', [], 'Modules.Linklist.Admin'))
                ->setOptions([
                    'field' => 'block_name',
                ])
            )
            ->add((new PositionColumn('position'))
                ->setName($this->trans('Position', [], 'Admin.Global'))
                ->setOptions([
                    'id_field' => 'id_link_block',
                    'position_field' => 'position',
                    'update_route' => 'admin_link_block_update_positions',
                    'update_method' => 'POST',
                    'record_route_params' => [
                        'id_hook' => 'hookId',
                    ],
                ])
            )
            ->add((new ActionColumn('actions'))
                ->setOptions([
                    'actions' => (new RowActionCollection())
                        ->add((new LinkRowAction('edit'))
                            ->setIcon('edit')
                            ->setOptions([
                                'route' => 'admin_link_block_edit',
                                'route_param_name' => 'linkBlockId',
                                'route_param_field' => 'id_link_block',
                            ])
                        )
                        ->add((new SubmitRowAction('delete'))
                            ->setName($this->trans('Delete', [], 'Admin.Actions'))
                            ->setIcon('delete')
                            ->setOptions([
                                'method' => 'POST',
                                'route' => 'admin_link_block_delete',
                                'route_param_name' => 'linkBlockId',
                                'route_param_field' => 'id_link_block',
                                'confirm_message' => $this->trans(
                                    'Delete selected item?',
                                    [],
                                    'Admin.Notifications.Warning'
                                ),
                            ])
                        ),
                ])
            )
        ;
    }
}
