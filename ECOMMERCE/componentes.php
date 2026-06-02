<?php
// renderizar os Destaques
function renderDestaque($titulo) {
    echo '<article class="destaque_item" style="flex: 1;">
            <div style="width: 100%; height: 150px; background-color: lightgray; border-radius: 8px;"></div>
            <h3>' . $titulo . '</h3>
          </article>';
}

// renderizar os Artigos
function renderArtigo($titulo, $texto) {
    echo '<article class="artigo_item" style="flex: 1; display: flex; gap: 15px; align-items: start;">
            <div style="min-width: 60px; height: 60px; background-color: lightgray; border-radius: 8px;"></div>
            <div>
                <h4 style="margin-top: 0;">' . $titulo . '</h4>
                <p>' . $texto . '</p>
            </div>
          </article>';
}

// renderizar os ícones da Galeria
function renderGaleriaItem() {
    echo '<div style="width: 18%; height: 80px; background-color: lightgray; border-radius: 8px;"></div>';
}
?>