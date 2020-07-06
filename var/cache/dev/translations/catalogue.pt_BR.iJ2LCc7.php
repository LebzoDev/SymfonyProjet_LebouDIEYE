<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pt_BR', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Anterior',
    'label_next' => 'Próximo',
    'filter_searchword' => 'Procurar...',
  ),
));

$cataloguePt = new MessageCatalogue('pt', array (
));
$catalogue->addFallbackCatalogue($cataloguePt);
$catalogueEn = new MessageCatalogue('en', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$cataloguePt->addFallbackCatalogue($catalogueEn);

return $catalogue;
