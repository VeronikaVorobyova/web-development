<?php if (!defined('ABSPATH')) { exit; } use Carbon_Fields\Container; use Carbon_Fields\Field; Container::make('theme_options', 'Настройки сайта') ->add_tab('Общие настройки', [

Field::make('text', 'title_site', 'Название сайта в навигационном меню'), Field::make('text', 'footer_text', 'Подпись в подвале'), Field::make('text', 'google_url', 'Google'), Field::make('text', 'instagram_url', 'Instagram'), Field::make('text', 'vk_url', 'Вконтакте'), ]);