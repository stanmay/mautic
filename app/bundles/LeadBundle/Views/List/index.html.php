<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$view->extend('MauticCoreBundle:Default:content.html.php');
$view['slots']->set('mauticContent', 'leadlist');
$view['slots']->set("headerTitle", $view['translator']->trans('mautic.lead.list.header.index'));

?>

<?php $view['slots']->start("actions"); ?>
	<a class="btn btn-default" href="<?php echo $this->container->get('router')->generate(
	        'mautic_leadlist_action', array("objectAction" => "new")); ?>" data-toggle="ajax">
	        <i class="fa fa-plus"></i>
	        <?php echo $view["translator"]->trans("mautic.lead.list.menu.new"); ?>
	</a>
<?php $view['slots']->stop(); ?>

<div class="panel panel-default page-list bdr-t-wdh-0">
    <div class="panel-body">
        <div class="box-layout">
            <div class="col-xs-6 va-m">
                <?php echo $view->render('MauticCoreBundle:Helper:search.html.php', array('searchValue' => $searchValue, 'action' => $currentRoute)); ?>
            </div>
            <div class="col-xs-6 va-m text-right">
                <button type="button" class="btn btn-warning"><i class="fa fa-files-o"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
            </div>
        </div>
    </div>
    <?php $view['slots']->output('_content'); ?>
</div>