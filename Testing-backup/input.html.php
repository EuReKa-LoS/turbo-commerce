<div>
    <label for="<?= $name ?>" class="block text-sm px-3 mb-px">Nom</label>
    <input type="<?= $type ?? 'text' ?>" name="<?= $name ?>" id="<?= $name ?>" class="border focus:border"  >
<h1>Modification d'un livre</h1>
                    <input type="hidden" name="idLivre" value="<?php echo $_POST['idLivre'] ?>" /></li>
                    
                    <li><label for="titreLivre">Titre du livre: </label><input type="text" id="titreLivre" name="titreLivre" value="<?php echo $donnees['titreLivre']; ?>"/></li>

                    <li><label for="categorieLivre">Categorie du livre: </label>
                        <select name="categorieLivre" id="categorieLivre">
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category->id ?>" 
                                
                                ><?= $category->nameCategorie ?></option>
                            <?php endforeach ?>
                        </select>
                    <li><label for="descriptionLivre">Description du livre: </label><textarea id="descriptionLivre" name="descriptionLivre" rows="10px" cols="50px"><?php echo $donnees['descriptionLivre']; ?></textarea></li>
                    <li><label for="auteurLivre"></label>Auteur du livre: <input type="text" id="auteurLivre" name="auteurLivre" value="<?php echo $donnees['auteurLivre']; ?>"/></li>
                    <!-- Gestion file -->
                    <li><label for="imgLivre">Jaquette du livre: </label> : <img src="<?php echo $donnees['imgLivre'];?>" class="img-rounded" width="80" height="120" />
                                                                            <input type="file" id="imgLivreUpdated" name="imgLivreUpdated" /></li>
                    <!-- Fin gestion file -->            
                    <li><label for="stockLivre"></label>Stock du livre: <input type="text" id="stockLivre" name="stockLivre" value="<?php echo $donnees['stockLivre']; ?>"/></li>
                    <li><label for="prixLivre">Prix neuf: </label> : <input type="text" id="prixLivre" name="prixLivre" value="<?php echo $donnees['prixLivre']; ?>"></li>
                    <li><label for="prixLivre">Code Barre: </label> : <input type="text" id="codeBarreLivre" name="codeBarreLivre" value="<?php echo $donnees['codeBarreLivre']; ?>"></li>
                    <li><label for="prixLivre">ISBN: </label> : <input type="text" id="ISBN" name="ISBN" value="<?php echo $donnees['ISBN']; ?>"></li>
                            </div>