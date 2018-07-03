DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Ajout_Client`(IN `v_nom` VARCHAR(25), IN `v_prenom` VARCHAR(25), IN `v_civ_id` VARCHAR(15), IN `v_date_naissance` DATE, IN `v_mail` VARCHAR(40), IN `v_permis_numero` VARCHAR(25), IN `v_adresse_l1` VARCHAR(50), IN `v_adresse_l2` VARCHAR(50), IN `v_adresse_l3` VARCHAR(50), IN `v_cp_id` INT(11), IN `v_mdp` VARCHAR(25), IN `v_stat_id` INT(11), IN `v_type_adr_id` INT(11), IN `v_date_permis` DATE, IN `v_typepermis_id` INT(11))
begin 

insert into client(cli_civ_id,cli_nom, cli_prenom, cli_date_naissance, cli_mail, cli_permis_numero,cli_mdp,cli_stat_id)
values (v_civ_id, v_nom,v_prenom,v_date_naissance,v_mail,v_permis_numero,v_mdp,v_stat_id);
set @v_id:=LAST_INSERT_ID();
insert into adresse(adresse_l1,adresse_l2,adresse_l3,cp_id,cli_id,type_adr_id)
values (v_adresse_l1,v_adresse_l2,v_adresse_l3,v_cp_id, @v_id,v_type_adr_id);
insert into detenir (cli_id,date_permis,typepermis_id)
values(@v_id,v_date_permis,v_typepermis_id);
end$$
DELIMITER ;

Delimiter $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Liste_Client`()
begin
		select cli_civ_denomination, cli_date_naissance, cl.cli_id, cli_mail, cli_nom, cli_permis_numero, cli_prenom,cli_stat_libelle, adresse_l1, adresse_l2, adresse_l3, cp_codepostal, cp_ville 
        from civilite ci inner join client cl on cl.cli_civ_id=ci.cli_civ_id 
        inner join statut_client sc on cl.cli_stat_id=sc.cli_stat_id 
        inner join adresse a on cl.cli_id=a.cli_id 			inner join cpville cp on cp.cp_id=a.cp_id;
end$$
Delimiter ;

