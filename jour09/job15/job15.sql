SELECT salles.nom AS Salle_nom,
etage.nom AS Etage_nom
FROM salles
JOIN etage ON salles.id_etage=etage.id; 
