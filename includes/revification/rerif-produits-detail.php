<?php
 $detail_pro= recup_produict_detail($mat_produit);
 if(!empty($detail_pro)):
     $nom_produit        =    $detail_pro[0]->nom_art;
     $courte_description =    $detail_pro[0]->courte_description;
     $description        =    $detail_pro[0]->description;
     $lien_img_vedette   =    $detail_pro[0]->lien_img_vedette;
     $lien_img2          =    $detail_pro[0]->lien_img2;
     $lien_img3          =    $detail_pro[0]->lien_img3;
     $lien_img4          =   $detail_pro[0]->lien_img4;
     $lien_img5          =   $detail_pro[0]->lien_img5;
     $mat_categorie_art  =   $detail_pro[0]->mat_categorie_art;
     $prix_reel          =    $detail_pro[0]->prix_reel;
     $prix_fictif        =    $detail_pro[0]->prix_fictif;
     $mumero             =    info_boutique()[0]->numero_whatsapp_aide;
     $code_iso_devise               =    info_boutique()[0]->code_iso_devise;
     ?>