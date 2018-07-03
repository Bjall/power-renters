use powerrenters;

select modele.vehmmod_libelle as 'Modèle', mar.vehmar_libelle as 'Marque', statut_entretien_libelle as 'Statut'
from statut_entretien as s 
inner join entretien as e  
on s.statut_entretien_id = e.statut_entretien_id
inner join vehicule as v 
on v.veh_id = e.veh_id
inner join vehm_modele as modele
on v.vehmmod_id = modele.vehmmod_id
inner join vehm_marque as mar
on modele.vehmar_id = mar.vehmar_id
where s.statut_entretien_id = 1

select contrat_id
from contratdelocation
where contrat_date_fin >= '2017-10-19' ;

select modele.vehmmod_libelle as 'Modèle', mar.vehmar_libelle as 'Marque', op.option_veh_libelle as 'Option'
from option_veh as  op
inner join disposer as d
on d.option_veh_id = op.option_veh_id
inner join vehicule as veh
on veh.veh_id = d.veh_id
inner join vehm_modele as modele
on veh.vehmmod_id = modele.vehmmod_id
inner join vehm_marque as mar
on modele.vehmar_id = mar.vehmar_id
where modele.vehmmod_libelle like '%clio%';

select cli_mail,cli_mdp
from client;
where cli_mail=XX and cli_mdp=XX;

transaction pour suppr un client : 
delete from adresse where cli_id=11;

delete from detenir
where cli_id=11;

delete from client 
where cli_id=11;

select c.contrat_id, c.contrat_date, c.contrat_lieu, c.contrat_date_fin, c.contrat_date_debut, contrat_caution, contrat_date_reservation, contrat_accompte, 
v.veh_id, vehmmod_libelle, vehmar_libelle
from contratdelocation c 
inner join facture on facture.fac_id=c.fac_id
inner join vehicule v on  c.veh_id=v.veh_id
inner join vehm_modele vm on v.vehmmod_id=vm.vehmmod_id
inner join vehm_marque vmq on vm.vehmar_id=vmq.vehmar_id
where cli_id=2;
liaison de 5  tables !!!!