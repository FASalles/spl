<?php $titulo = 'PortMap';
    include("../spl/Controller/IniciarSessao.php");
    include("../spl/views/inicioSB-html.php");
    include("../spl/views/sidebar.php");
    include("../spl/views/header.php");
    include("../spl/views/fim-html.php") ?>




<style>
    body {
        text-align: center;
        font: 20px arial;
    }
    form#mapForm input[type=text] {
        width: 40px;
    }
</style>
<script>
    function isUndefined(v) {
        return typeof(v) == 'undefined';
    }
    const maxSw = 4,
        maxPs = 48;

    var stack = [{}],
        sw    = 1,
        ps    = 1,
        pp    = 1,
        pt    = 1,
        $form,$result;

    window.onload = function() {
        $form   = document.getElementById('mapForm');
        $result = document.getElementById('result');

        while (sw <= maxSw) {
            while (ps <= maxPs) {
                if (isUndefined(stack[pp])) {
                    stack[pp] = [];
                }

                stack[pp][pt] = {'s': sw, 'p': ps};
                ps++;

                if (ps == 13) {
                    pp++;
                    pt = 1;
                }
                else if (ps == 25) {
                    pp--;
                    pt = 13;
                }
                else if (ps == 37) {
                    pp++;
                    pt = 13;
                }
                else if (ps == 49) {
                    pp++;
                    pt = 1;
                }
                else {
                    pt++;
                }
            }

            sw++;
            ps = 1;
        }

        $form.onsubmit = function() {
            _pp = parseInt($form.pp.value);
            _pt = parseInt($form.pt.value);

            if (!isUndefined(stack[_pp][_pt])) {
                _map = stack[_pp][_pt];

                $result.innerHTML = 'Switch: '+_map.s+' Porta: '+_map.p;
            }
            else {
                $result.innerHTML = 'Não localizado: PP'+_pp+'PT'+_pt;
            }

            return false;
        }
    }
</script>

<form name="mapForm" id="mapForm">
    <label>PP</label><input type="text" name="pp" />
    <label>PT</label><input type="text" name="pt" />
    <input type="submit" value="check" />
</form>
<div id="result"></div>



