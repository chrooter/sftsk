<?php return array (
  '9026d7683dafb5257947a080ac46ca9d' => 
  array (
    'criteria' => 
    array (
      'name' => 'googlesitemap',
    ),
    'object' => 
    array (
      'name' => 'googlesitemap',
      'path' => '{core_path}components/googlesitemap/',
      'assets_path' => NULL,
    ),
  ),
  '06674facf1b5a4c190b3a8b3be2a0c4f' => 
  array (
    'criteria' => 
    array (
      'category' => 'GoogleSiteMap',
    ),
    'object' => 
    array (
      'id' => 4,
      'parent' => 0,
      'category' => 'GoogleSiteMap',
    ),
    'files' => 
    array (
      0 => '/var/www/maakee/core/components',
    ),
  ),
  '3f15cedd6e6d7268b8ff86cf1ac21733' => 
  array (
    'criteria' => 
    array (
      'name' => 'GoogleSiteMap',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'GoogleSiteMap',
      'description' => 'Builds the Google SiteMap XML.',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/**
 * GoogleSiteMap
 *
 * Copyright 2009-2010 by Shaun McCormick <shaun@modx.com>
 *
 * - Based on Michal Till\'s MODx Evolution GoogleSiteMap_XML snippet
 *
 * GoogleSiteMap is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * GoogleSiteMap is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * GoogleSiteMap; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package googlesitemap
 */
/**
 * GoogleSiteMap for MODx Revolution
 *
 * @package googlesitemap
 */
require_once $modx->getOption(\'googlesitemap.core_path\',null,$modx->getOption(\'core_path\').\'components/googlesitemap/\').\'model/googlesitemap/googlesitemap.class.php\';
$GoogleSiteMap = new GoogleSiteMap($modx,$scriptProperties);

/* setup default properties */
$googleSchema = $modx->getOption(\'googleSchema\',$scriptProperties,\'http://www.sitemaps.org/schemas/sitemap/0.9\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'gContainer\');
$startId = (int)$modx->getOption(\'startId\',$scriptProperties,0);

/* get container tpl and content */
return $GoogleSiteMap->getChunk($containerTpl,array(
    \'schema\' => $googleSchema,
    \'items\' => $GoogleSiteMap->run($startId),
));',
      'locked' => 0,
      'properties' => 'a:15:{s:16:"allowedtemplates";a:6:{s:4:"name";s:16:"allowedtemplates";s:4:"desc";s:30:"prop_gsm.allowedtemplates_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;}s:7:"context";a:6:{s:4:"name";s:7:"context";s:4:"desc";s:21:"prop_gsm.context_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;}s:8:"maxDepth";a:6:{s:4:"name";s:8:"maxDepth";s:4:"desc";s:22:"prop_gsm.maxdepth_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:0;s:7:"lexicon";N;}s:11:"hideDeleted";a:6:{s:4:"name";s:11:"hideDeleted";s:4:"desc";s:25:"prop_gsm.hidedeleted_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;}s:12:"googleSchema";a:6:{s:4:"name";s:12:"googleSchema";s:4:"desc";s:26:"prop_gsm.googleschema_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:43:"http://www.sitemaps.org/schemas/sitemap/0.9";s:7:"lexicon";N;}s:9:"published";a:6:{s:4:"name";s:9:"published";s:4:"desc";s:23:"prop_gsm.published_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;}s:10:"searchable";a:6:{s:4:"name";s:10:"searchable";s:4:"desc";s:24:"prop_gsm.searchable_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;}s:16:"excludeResources";a:6:{s:4:"name";s:16:"excludeResources";s:4:"desc";s:30:"prop_gsm.excluderesources_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;}s:6:"sortBy";a:6:{s:4:"name";s:6:"sortBy";s:4:"desc";s:20:"prop_gsm.sortby_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"menuindex";s:7:"lexicon";N;}s:11:"sortByAlias";a:6:{s:4:"name";s:11:"sortByAlias";s:4:"desc";s:25:"prop_gsm.sortbyalias_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"modResource";s:7:"lexicon";N;}s:7:"sortDir";a:6:{s:4:"name";s:7:"sortDir";s:4:"desc";s:21:"prop_gsm.sortdir_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"ASC";s:7:"lexicon";N;}s:14:"templateFilter";a:6:{s:4:"name";s:14:"templateFilter";s:4:"desc";s:28:"prop_gsm.templatefilter_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:2:"id";s:7:"lexicon";N;}s:7:"itemTpl";a:6:{s:4:"name";s:7:"itemTpl";s:4:"desc";s:21:"prop_gsm.itemtpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"gItem";s:7:"lexicon";N;}s:12:"containerTpl";a:6:{s:4:"name";s:12:"containerTpl";s:4:"desc";s:26:"prop_gsm.containertpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:10:"gContainer";s:7:"lexicon";N;}s:7:"startId";a:6:{s:4:"name";s:7:"startId";s:4:"desc";s:21:"prop_gsm.startid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";N;}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * GoogleSiteMap
 *
 * Copyright 2009-2010 by Shaun McCormick <shaun@modx.com>
 *
 * - Based on Michal Till\'s MODx Evolution GoogleSiteMap_XML snippet
 *
 * GoogleSiteMap is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * GoogleSiteMap is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * GoogleSiteMap; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package googlesitemap
 */
/**
 * GoogleSiteMap for MODx Revolution
 *
 * @package googlesitemap
 */
require_once $modx->getOption(\'googlesitemap.core_path\',null,$modx->getOption(\'core_path\').\'components/googlesitemap/\').\'model/googlesitemap/googlesitemap.class.php\';
$GoogleSiteMap = new GoogleSiteMap($modx,$scriptProperties);

/* setup default properties */
$googleSchema = $modx->getOption(\'googleSchema\',$scriptProperties,\'http://www.sitemaps.org/schemas/sitemap/0.9\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'gContainer\');
$startId = (int)$modx->getOption(\'startId\',$scriptProperties,0);

/* get container tpl and content */
return $GoogleSiteMap->getChunk($containerTpl,array(
    \'schema\' => $googleSchema,
    \'items\' => $GoogleSiteMap->run($startId),
));',
    ),
  ),
);