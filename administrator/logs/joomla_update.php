#
#<?php die('Forbidden.'); ?>
#Date: 2020-07-23 19:35:12 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2020-07-23T19:35:12+00:00	INFO ::1	update	Actualización iniciada por el usuario Super User (271). La versión antigua es 3.9.8.
2020-07-23T19:35:14+00:00	INFO ::1	update	Descargando archivo de actualización de https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.9.20-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20200723%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20200723T193509Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=f340ddea69f220e6416c267235dc7825bfd4a086d7054a2a811dc8f5b5b47076.
2020-07-23T19:35:18+00:00	INFO ::1	update	Archivo Joomla_3.9.20-Stable-Update_Package.zip descargado.
2020-07-23T19:35:20+00:00	INFO ::1	update	Empezando la instalación de una nueva versión.
2020-07-23T19:37:10+00:00	INFO ::1	update	Terminando la instalación.
2020-07-23T19:37:10+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.8-2019-06-15. Texto de la consulta: ALTER TABLE `#__template_styles` DROP INDEX `idx_home`;.
2020-07-23T19:37:10+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.8-2019-06-15. Texto de la consulta: ALTER TABLE `#__template_styles` ADD INDEX `idx_client_id` (`client_id`);.
2020-07-23T19:37:10+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.8-2019-06-15. Texto de la consulta: ALTER TABLE `#__template_styles` ADD INDEX `idx_client_id_home` (`client_id`, `h.
2020-07-23T19:37:10+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.10-2019-07-09. Texto de la consulta: ALTER TABLE `#__template_styles` MODIFY `home` char(7) NOT NULL DEFAULT '0';.
2020-07-23T19:37:11+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__categories` MODIFY `description` mediumtext;.
2020-07-23T19:37:11+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__categories` MODIFY `params` text;.
2020-07-23T19:37:11+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__fields` MODIFY `default_value` text;.
2020-07-23T19:37:12+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__fields_values` MODIFY `value` text;.
2020-07-23T19:37:12+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__finder_links` MODIFY `description` text;.
2020-07-23T19:37:12+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__modules` MODIFY `content` text;.
2020-07-23T19:37:12+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__ucm_content` MODIFY `core_body` mediumtext;.
2020-07-23T19:37:12+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__ucm_content` MODIFY `core_params` text;.
2020-07-23T19:37:12+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__ucm_content` MODIFY `core_images` text;.
2020-07-23T19:37:13+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__ucm_content` MODIFY `core_urls` text;.
2020-07-23T19:37:13+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__ucm_content` MODIFY `core_metakey` text;.
2020-07-23T19:37:13+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-02-15. Texto de la consulta: ALTER TABLE `#__ucm_content` MODIFY `core_metadesc` text;.
2020-07-23T19:37:13+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-03-04. Texto de la consulta: ALTER TABLE `#__users` DROP INDEX `username`;.
2020-07-23T19:37:13+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.16-2020-03-04. Texto de la consulta: ALTER TABLE `#__users` ADD UNIQUE INDEX `idx_username` (`username`);.
2020-07-23T19:37:13+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.19-2020-05-16. Texto de la consulta: ALTER TABLE `#__ucm_content` MODIFY `core_title` varchar(400) NOT NULL DEFAULT '.
2020-07-23T19:37:13+00:00	INFO ::1	update	Consulta ejecutada desde el archivo 3.9.19-2020-06-01. Texto de la consulta: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2020-07-23T19:37:13+00:00	INFO ::1	update	Borrando archivos y carpetas innecesarias.
2020-07-23T19:37:18+00:00	INFO ::1	update	Limpieza posinstalación.
2020-07-23T19:37:18+00:00	INFO ::1	update	Ha terminado la actualización a la versión 3.9.20.
