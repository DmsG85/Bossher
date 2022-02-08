<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tableau de Bord</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Liste des membres

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Pseudo</th>
                                    <th>Nom / Prénom</th>
                                    <th>Email</th>
                                    <th>Adresse complète</th>
                                    <th>Téléphone</th>
                                    <th>Evenements souscrit</th>
                                    <th>Modération</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php //foreach ($membres as $value): 
                                ?>
                                <tr>
                                    <td><?php //echo $value["pseudo"]; 
                                        ?></td>
                                    <td><?php //echo $value["nom"]; 
                                        ?>/<?php //echo $value["prenom"]; 
                                                                        ?></td>
                                    <td><?php //echo $value["email"]; 
                                        ?></td>

                                    <td><?php //echo $value["adresse"]['numero_voie']['code_postal']['ville']; 
                                        ?></td>
                                    <td><?php //echo $value["tel"]; 
                                        ?></td>
                                    <td>

                                        <a class="btn btn-warning" href="<?php //echo $this->rewritebase."admin/postEdit/".$value["idPost"];
                                                                            ?>" role="button">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a class="btn btn-danger operation" href="<?php //echo $this->rewritebase."admin/postDelete/".$value["idPost"];
                                                                                    ?>" onclick="//return confirm('Cette action supprimera ce post de façon permanente. Êtes vous sûr ?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php //endforeach; 
                                ?>
                            </tbody>
                        </table>
                        <p><i class="fas fa-pen-alt"></i> = Modifier</p>
                        <p><i class="fas fa-trash-alt"></i> = Supprimer</p>
                    </div>
                </div>
            </div>
        </div>
    </main>