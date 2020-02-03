DELETE FROM `system_settings` WHERE `item` = 'waka_crsm_settings';
INSERT INTO `system_settings` (`item`, `value`) VALUES ('waka_crsm_settings', '{\"countrys\":\"74\",\"country\":\"74\",\"sector\":\"1\",\"type\":\"1\"}');
DELETE FROM `system_settings` WHERE `item` = 'backend_brand_settings';
INSERT INTO `system_settings` (`id`, `item`, `value`) VALUES (83, 'backend_brand_settings', '{\"app_name\":\"TalktoB\",\"app_tagline\":\"Publiez vos donn\\u00e9es SI\",\"primary_color\":\"#048b9a\",\"secondary_color\":\"#e67e22\",\"accent_color\":\"#f1c40f\",\"menu_mode\":\"inline\",\"custom_css\":\"\"}');
