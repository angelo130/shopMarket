<div>
    <form class="search_form">
        <input type="text" class="form-control" placeholder="Cerca qui..." wire:model.live="query" style="border-radius: 5px">
        
      </form>
        
        <?php
            

            if (count($searchElements) > 0){
                ?>
                    
                <div class="allResult">
                    <h5><?php echo count($searchElements).' Prodotti trovati';?></h5>
                <?php 
                foreach ($searchElements as $searchElement) {

                    
                ?>
                    <div class="oneResult">
                        <h5><?php echo $searchElement['name']?></h5>
                        <button class="view-more" data-toggle="modal" data-target="#myModal1" data-product="{{ json_encode($searchElement) }}">Vedi altro</button>
                    </div>
                <?php 
                }
                ?>
                    
                </div>

                <?php
            }elseif ((count($searchElements) == 0) && $query != '') {
                ?>
                    
                    <div class="allResult">
                        <h5 class="noProduit">Nessun prodotto trovato</h5>
                    </div>
                    <?php 
            }

        ?>
      <style>
        .allResult{
            max-height: 80vh;
            overflow-y: scroll;
            position: absolute;
            z-index: 999;
            width: 387px;
            height: auto;
            padding: 10px;
            background: #fff;
            margin-top: 10px;
            border-radius: 3px;
        }
        @media (max-width: 768px){
            .allResult{
                left: 24%
            }
        }
        @media (max-width: 516px){
            .allResult{
                left: 13%
            }
        }
        @media (max-width: 446px){
            .allResult{
                left: 7%
            }
        }
        @media (max-width: 393px){
            .allResult{
                left: 0%
            }
        }
        .oneResult{
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #eee;
            z-index: 100;
            padding: 10px 7px;
            margin-bottom: 5px;
            border-radius: 3px;
        }
        .oneResult h5{
            color: #000;
            font-weight: 900;
            margin-top: auto;
        }
        .noProduit{
            font-weight: 700;
            margin-top: auto;
        }
      </style>
</div>
