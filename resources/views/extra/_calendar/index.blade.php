


<div class="calendario card border-0 shadow-sm rounded mb-4">
    <a href="#" id="volta">&laquo;</a><a href="#" id="vai">&raquo;</a>
    <table style="border-top: 1px solid #ffb400;" id="calendar_table" border="0" width="100%">

        <tbody id="mes_1" class="mes">
            <tr class="mes_title">
                <td colspan="7">Janeiro</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>


            <tr>

                @if (isset($date_01_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_01)) !!}"
                    title="{{ $date_01_01 }}">1</a></td>
                @else
                <td class="dia_1">1</td>
                @endif

                @if (isset($date_02_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_01)) !!}"
                    title="{{ $date_02_01 }}">2</a></td>
                @else
                <td class="dia_2">2</td>
                @endif

                @if (isset($date_03_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_01)) !!}"
                    title="{{ $date_03_01 }}">3</a></td>
                @else
                <td class="dia_3">3</td>
                @endif

                @if (isset($date_04_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_01)) !!}"
                    title="{{ $date_04_01 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif

                @if (isset($date_05_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_01)) !!}"
                    title="{{ $date_05_01 }}">5</a></td>
                @else
                <td class="dia_5">5</td>
                @endif

                @if (isset($date_06_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_01)) !!}"
                    title="{{ $date_06_01 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif

                @if (isset($date_07_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_01)) !!}"
                    title="{{ $date_07_01 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif
            </tr>
            <tr>
                @if (isset($date_08_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_01)) !!}"
                    title="{{ $date_08_01 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif

                @if (isset($date_09_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_01)) !!}"
                    title="{{ $date_09_01 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif

                @if (isset($date_10_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_01)) !!}"
                    title="{{ $date_10_01 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif

                @if (isset($date_11_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_01)) !!}"
                    title="{{ $date_11_01 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif

                @if (isset($date_12_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_01)) !!}"
                    title="{{ $date_12_01 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif

                @if (isset($date_13_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_01)) !!}"
                    title="{{ $date_13_01 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif

                @if (isset($date_14_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_01)) !!}"
                    title="{{ $date_14_01 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif

            </tr>
            <tr>


                @if (isset($date_15_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_01)) !!}"
                    title="{{ $date_15_01 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

                @if (isset($date_16_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_01)) !!}"
                    title="{{ $date_16_01 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif

                @if (isset($date_17_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_01)) !!}"
                    title="{{ $date_17_01 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif
                @if (isset($date_18_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_01)) !!}"
                    title="{{ $date_18_01 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

                @if (isset($date_19_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_01)) !!}"
                    title="{{ $date_19_01 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif

                @if (isset($date_20_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_01)) !!}"
                    title="{{ $date_20_01 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif

                @if (isset($date_21_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_01)) !!}"
                    title="{{ $date_21_01 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_22_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_01)) !!}"
                    title="{{ $date_22_01 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif

                @if (isset($date_23_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_01)) !!}"
                    title="{{ $date_23_01 }}">23</a></td>
                @else
                <td class="dia_21">23</td>
                @endif

                @if (isset($date_24_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_01)) !!}"
                    title="{{ $date_24_01 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

                @if (isset($date_25_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_25_01)) !!}"
                    title="{{ $date_25_01 }}">25</a></td>
                @else
                <td class="dia_25">25</td>
                @endif

                @if (isset($date_26_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_01)) !!}"
                    title="{{ $date_26_01 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

                @if (isset($date_27_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_01)) !!}"
                    title="{{ $date_27_01 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif

                @if (isset($date_28_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_01)) !!}"
                    title="{{ $date_28_01 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_29_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_29_01)) !!}"
                    title="{{ $date_29_01 }}">29</a></td>
                @else
                <td class="dia_29">29</td>
                @endif

                @if (isset($date_30_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_01)) !!}"
                    title="{{ $date_30_01 }}">21</a></td>
                @else
                <td class="dia_30">30</td>
                @endif

                @if (isset($date_31_01))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_31_01)) !!}"
                    title="{{ $date_31_01 }}">31</a></td>
                @else
                <td class="dia_31">31</td>
                @endif
            </tr>




        </tbody>
        <tbody id="mes_2" class="mes">
            <tr class="mes_title">
                <td colspan="7">Fevereiro</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>

                @if (isset($date_01_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_02)) !!}"
                    title="{{ $date_01_02 }}">1</a></td>
                @else
                <td class="dia_1">1</td>
                @endif

                @if (isset($date_02_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_02)) !!}"
                    title="{{ $date_02_02 }}">2</a></td>
                @else
                <td class="dia_2">2</td>
                @endif

                @if (isset($date_03_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_02)) !!}"
                    title="{{ $date_03_02 }}">1</a></td>
                @else
                <td class="dia_3">3</td>
                @endif

                @if (isset($date_04_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_02)) !!}"
                    title="{{ $date_04_02 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif
            </tr>
            <tr>
                @if (isset($date_05_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_02)) !!}"
                    title="{{ $date_05_02 }}">5</a></td>
                @else
                <td class="dia_5">5</td>
                @endif

                @if (isset($date_06_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_02)) !!}"
                    title="{{ $date_06_02 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif

                @if (isset($date_07_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_02)) !!}"
                    title="{{ $date_07_02 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif

                @if (isset($date_08_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_02)) !!}"
                    title="{{ $date_08_02 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif


                @if (isset($date_09_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_02)) !!}"
                    title="{{ $date_09_02 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif


                @if (isset($date_10_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_02)) !!}"
                    title="{{ $date_10_02 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif


                @if (isset($date_11_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_02)) !!}"
                    title="{{ $date_11_02 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif

            </tr>
            <tr>

                @if (isset($date_12_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_02)) !!}"
                    title="{{ $date_12_02 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif


                <td class="evento"><a href="/site/eventos/MjU=" title="Carnaval">13</a></td>


                @if (isset($date_14_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_02)) !!}"
                    title="{{ $date_14_02 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif


                @if (isset($date_15_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_02)) !!}"
                    title="{{ $date_15_02 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

                @if (isset($date_16_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_02)) !!}"
                    title="{{ $date_16_02 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif

                @if (isset($date_17_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_02)) !!}"
                    title="{{ $date_17_02 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif

                @if (isset($date_18_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_02)) !!}"
                    title="{{ $date_18_02 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

            <tr>
                @if (isset($date_19_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_02)) !!}"
                    title="{{ $date_19_02 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif

                @if (isset($date_20_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_02)) !!}"
                    title="{{ $date_20_02 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif

                @if (isset($date_21_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_02)) !!}"
                    title="{{ $date_21_02 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

                @if (isset($date_22_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_02)) !!}"
                    title="{{ $date_22_02 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif

                @if (isset($date_23_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_02)) !!}"
                    title="{{ $date_23_02 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif

                @if (isset($date_24_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_02)) !!}"
                    title="{{ $date_24_02 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

                @if (isset($date_25_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_25_02)) !!}"
                    title="{{ $date_25_02 }}">25</a></td>
                @else
                <td class="dia_25">25</td>
                @endif
            </tr>
            <tr>
                @if (isset($date_26_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_02)) !!}"
                    title="{{ $date_26_02 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

                @if (isset($date_27_02))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_02)) !!}"
                    title="{{ $date_27_02 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif

                @if (isset($date_01_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_03)) !!}"
                    title="{{ $date_01_03 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif

            </tr>
        </tbody>
        <tbody id="mes_3" class="mes">
            <tr class="mes_title">
                <td colspan="7">Março</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>




                @if (isset($date_01_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_03)) !!}"
                    title="{{ $date_01_03 }}">1</a></td>
                @else
                <td class="dia_1">1</td>
                @endif


                @if (isset($date_02_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_03)) !!}"
                    title="{{ $date_02_03 }}">2</a></td>
                @else
                <td class="dia_2">2</td>
                @endif

                @if (isset($date_03_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_03)) !!}"
                    title="{{ $date_03_03 }}">3</a></td>
                @else
                <td class="dia_3">3</td>
                @endif

                @if (isset($date_04_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_03)) !!}"
                    title="{{ $date_04_03 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_05_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_03)) !!}"
                    title="{{ $date_05_03 }}">5</a></td>
                @else
                <td class="dia_5">5</td>
                @endif

                @if (isset($date_06_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_03)) !!}"
                    title="{{ $date_06_03 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif

                @if (isset($date_07_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_03)) !!}"
                    title="{{ $date_07_03 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif

                @if (isset($date_08_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_03)) !!}"
                    title="{{ $date_08_03 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif

                @if (isset($date_09_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_03)) !!}"
                    title="{{ $date_09_03 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif

                @if (isset($date_10_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_03)) !!}"
                    title="{{ $date_10_03 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif

                @if (isset($date_11_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_03)) !!}"
                    title="{{ $date_11_03 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif
            </tr>
            <tr>
                @if (isset($date_12_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_03)) !!}"
                    title="{{ $date_12_03 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif

                @if (isset($date_13_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_03)) !!}"
                    title="{{ $date_13_03 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif

                @if (isset($date_14_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_03)) !!}"
                    title="{{ $date_14_03 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif

                @if (isset($date_15_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_03)) !!}"
                    title="{{ $date_15_03 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

                @if (isset($date_16_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_03)) !!}"
                    title="{{ $date_16_03 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif

                @if (isset($date_17_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_03)) !!}"
                    title="{{ $date_17_03 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif

                @if (isset($date_18_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_03)) !!}"
                    title="{{ $date_18_03 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_19_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_03)) !!}"
                    title="{{ $date_19_03 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif

                @if (isset($date_20_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_03)) !!}"
                    title="{{ $date_20_03 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif

                @if (isset($date_21_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_03)) !!}"
                    title="{{ $date_21_03 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

                @if (isset($date_22_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_03)) !!}"
                    title="{{ $date_22_03 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif

                @if (isset($date_23_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_03)) !!}"
                    title="{{ $date_23_03 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif

                @if (isset($date_24_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_03)) !!}"
                    title="{{ $date_24_03 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

                @if (isset($date_25_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_25_03)) !!}"
                    title="{{ $date_25_03 }}">25</a></td>
                @else
                <td class="dia_25">25</td>
                @endif
            </tr>
            <tr>
                @if (isset($date_26_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_03)) !!}"
                    title="{{ $date_26_03 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

                @if (isset($date_27_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_03)) !!}"
                    title="{{ $date_27_03 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif

                @if (isset($date_28_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_03)) !!}"
                    title="{{ $date_28_03 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif


                @if (isset($date_29_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_29_03)) !!}"
                    title="{{ $date_29_03 }}">29</a></td>
                @else
                <td class="dia_29">29</td>
                @endif

                @if (isset($date_30_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_03)) !!}"
                    title="{{ $date_30_03 }}">30</a></td>
                @else
                <td class="dia_30">30</td>
                @endif

                @if (isset($date_31_03))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_31_03)) !!}"
                    title="{{ $date_31_03 }}">31</a></td>
                @else
                <td class="dia_31">31</td>
                @endif

            </tr>
        </tbody>
        <tbody id="mes_4" class="mes">
            <tr class="mes_title">
                <td colspan="7">Abril</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>


                @if (isset($date_01_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_04)) !!}"
                    title="{{ $date_01_04 }}">1</a></td>
                @else
                <td class="dia_1">1</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_02_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_04)) !!}"
                    title="{{ $date_02_04 }}">2</a></td>
                @else
                <td class="dia_2">2</td>
                @endif

                @if (isset($date_03_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_04)) !!}"
                    title="{{ $date_03_04 }}">3</a></td>
                @else
                <td class="dia_3">3</td>
                @endif

                @if (isset($date_04_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_04)) !!}"
                    title="{{ $date_04_04 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif

                @if (isset($date_05_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_04)) !!}"
                    title="{{ $date_05_04 }}">5</a></td>
                @else
                <td class="dia_5">5</td>
                @endif

                @if (isset($date_06_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_04)) !!}"
                    title="{{ $date_06_04 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif

                @if (isset($date_07_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_04)) !!}"
                    title="{{ $date_07_04 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif

                @if (isset($date_08_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_04)) !!}"
                    title="{{ $date_08_04 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_09_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_04)) !!}"
                    title="{{ $date_09_04 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif

                @if (isset($date_10_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_04)) !!}"
                    title="{{ $date_10_04 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif

                @if (isset($date_11_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_04)) !!}"
                    title="{{ $date_11_04 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif

                @if (isset($date_12_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_04)) !!}"
                    title="{{ $date_12_04 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif

                @if (isset($date_13_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_04)) !!}"
                    title="{{ $date_13_04 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif

                @if (isset($date_14_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_04)) !!}"
                    title="{{ $date_14_04 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif

                @if (isset($date_15_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_04)) !!}"
                    title="{{ $date_15_04 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_16_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_04)) !!}"
                    title="{{ $date_16_04 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif

                @if (isset($date_17_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_04)) !!}"
                    title="{{ $date_17_04 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif

                @if (isset($date_18_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_04)) !!}"
                    title="{{ $date_18_04 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

                @if (isset($date_19_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_04)) !!}"
                    title="{{ $date_19_04 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif

                @if (isset($date_20_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_04)) !!}"
                    title="{{ $date_20_04 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif

                @if (isset($date_21_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_04)) !!}"
                    title="{{ $date_21_04 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

                @if (isset($date_22_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_04)) !!}"
                    title="{{ $date_22_04 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif
            </tr>
            <tr>
                @if (isset($date_23_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_04)) !!}"
                    title="{{ $date_23_04 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif

                @if (isset($date_24_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_04)) !!}"
                    title="{{ $date_24_04 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

                @if (isset($date_25_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_25_04)) !!}"
                    title="{{ $date_25_04 }}">25</a></td>
                @else
                <td class="dia_25">25</td>
                @endif

                @if (isset($date_26_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_04)) !!}"
                    title="{{ $date_26_04 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

                @if (isset($date_27_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_04)) !!}"
                    title="{{ $date_27_04 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif

                @if (isset($date_28_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_04)) !!}"
                    title="{{ $date_28_04 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif

                @if (isset($date_29_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_29_04)) !!}"
                    title="{{ $date_29_04 }}">29</a></td>
                @else
                <td class="dia_29">29</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_30_04))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_04)) !!}"
                    title="{{ $date_30_04 }}">30</a></td>
                @else
                <td class="dia_30">30</td>
                @endif

            </tr>
        </tbody>
        <tbody id="mes_5" class="mes">
            <tr class="mes_title">
                <td colspan="7">Maio</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                <td></td>

                <td class="efemeride"><a href="/site/eventos/MTM="
                        title="1 DE MAIO - DIA INTERNACIONAL DO TRABALHADOR">1</a></td>


                        @if (isset($date_02_05))
                        <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_05)) !!}"
                            title="{{ $date_02_05 }}">2</a></td>
                        @else
                        <td class="dia_2">2</td>
                        @endif

                        @if (isset($date_03_05))
                        <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_05)) !!}"
                            title="{{ $date_03_05 }}">3</a></td>
                        @else
                        <td class="dia_3">3</td>
                        @endif

                        @if (isset($date_04_05))
                        <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_05)) !!}"
                            title="{{ $date_04_05 }}">4</a></td>
                        @else
                        <td class="dia_4">4</td>
                        @endif

                        @if (isset($date_05_05))
                        <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_05)) !!}"
                            title="{{ $date_05_05 }}">5</a></td>
                        @else
                        <td class="dia_5">5</td>
                        @endif

                        @if (isset($date_06_05))
                        <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_05)) !!}"
                            title="{{ $date_06_05 }}">6</a></td>
                        @else
                        <td class="dia_6">6</td>
                        @endif


            </tr>
            <tr>
                @if (isset($date_07_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_05)) !!}"
                    title="{{ $date_07_05 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif

                @if (isset($date_08_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_05)) !!}"
                    title="{{ $date_08_05 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif

                @if (isset($date_09_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_05)) !!}"
                    title="{{ $date_09_05 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif

                @if (isset($date_10_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_05)) !!}"
                    title="{{ $date_10_05 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif

                @if (isset($date_11_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_05)) !!}"
                    title="{{ $date_11_05 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif

                @if (isset($date_12_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_05)) !!}"
                    title="{{ $date_12_05 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif

                @if (isset($date_13_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_05)) !!}"
                    title="{{ $date_13_05 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif
            </tr>
            <tr>
                @if (isset($date_14_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_05)) !!}"
                    title="{{ $date_14_05 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif

                @if (isset($date_15_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_05)) !!}"
                    title="{{ $date_15_05 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

                @if (isset($date_16_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_05)) !!}"
                    title="{{ $date_16_05 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif

                @if (isset($date_17_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_05)) !!}"
                    title="{{ $date_17_05 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif

                @if (isset($date_18_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_05)) !!}"
                    title="{{ $date_18_05 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

                @if (isset($date_19_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_05)) !!}"
                    title="{{ $date_19_05 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif

                @if (isset($date_20_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_05)) !!}"
                    title="{{ $date_20_05 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_21_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_05)) !!}"
                    title="{{ $date_21_05 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

                @if (isset($date_22_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_05)) !!}"
                    title="{{ $date_22_05 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif

                @if (isset($date_23_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_05)) !!}"
                    title="{{ $date_23_05 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif

                @if (isset($date_24_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_05)) !!}"
                    title="{{ $date_24_05 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

                <td class="evento"><a href="/site/eventos/MzI=" title="25  DE MAIO DIA DA ÁFRICA">25</a></td>

                @if (isset($date_26_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_05)) !!}"
                    title="{{ $date_26_05 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

                @if (isset($date_27_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_05)) !!}"
                    title="{{ $date_27_05 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_28_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_05)) !!}"
                    title="{{ $date_28_05 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif

                @if (isset($date_29_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_29_05)) !!}"
                    title="{{ $date_29_05 }}">29</a></td>
                @else
                <td class="dia_29">29</td>
                @endif

                @if (isset($date_30_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_05)) !!}"
                    title="{{ $date_30_05 }}">30</a></td>
                @else
                <td class="dia_30">30</td>
                @endif

                @if (isset($date_31_05))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_31_05)) !!}"
                    title="{{ $date_31_05 }}">31</a></td>
                @else
                <td class="dia_31">31</td>
                @endif
            </tr>
        </tbody>
        <tbody id="mes_6" class="mes">
            <tr class="mes_title">
                <td colspan="7">Junho</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="evento"><a href="/site/eventos/Mjc=" title="Dia Mundial da Criança">1</a></td>


                @if (isset($date_02_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_06)) !!}"
                    title="{{ $date_02_06 }}">2</a></td>
                @else
                <td class="dia_2">2</td>
                @endif

                @if (isset($date_03_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_06)) !!}"
                    title="{{ $date_03_06 }}">3</a></td>
                @else
                <td class="dia_3">3</td>
                @endif


            </tr>
            <tr>
                @if (isset($date_04_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_06)) !!}"
                    title="{{ $date_04_06 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif

                @if (isset($date_05_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_06)) !!}"
                    title="{{ $date_05_06 }}">5</a></td>
                @else
                <td class="dia_5">5</td>
                @endif


                @if (isset($date_06_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_06)) !!}"
                    title="{{ $date_06_06 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif


                @if (isset($date_07_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_06)) !!}"
                    title="{{ $date_07_06 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif


                @if (isset($date_08_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_06)) !!}"
                    title="{{ $date_08_06 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif

                @if (isset($date_09_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_06)) !!}"
                    title="{{ $date_09_06 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif

                @if (isset($date_10_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_06)) !!}"
                    title="{{ $date_10_06 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_11_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_06)) !!}"
                    title="{{ $date_11_06 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif

                @if (isset($date_12_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_06)) !!}"
                    title="{{ $date_12_06 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif

                @if (isset($date_13_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_06)) !!}"
                    title="{{ $date_13_06 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif

                @if (isset($date_14_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_06)) !!}"
                    title="{{ $date_14_06 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif

                @if (isset($date_15_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_06)) !!}"
                    title="{{ $date_15_06 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

                <td class="evento"><a href="/site/eventos/MzA=" title="Dia Internacional da Criança Africana">16</a>
                </td>

                @if (isset($date_17_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_06)) !!}"
                    title="{{ $date_17_06 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_18_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_06)) !!}"
                    title="{{ $date_18_06 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

                @if (isset($date_19_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_06)) !!}"
                    title="{{ $date_19_06 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif

                @if (isset($date_20_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_06)) !!}"
                    title="{{ $date_20_06 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif

                @if (isset($date_21_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_06)) !!}"
                    title="{{ $date_21_06 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

                <td class="evento"><a href="/site/eventos/MTQ=" title="DIA DO MINISTÉRIO DO INTERIOR">22</a></td>


                @if (isset($date_23_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_06)) !!}"
                    title="{{ $date_23_06 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif

                @if (isset($date_24_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_06)) !!}"
                    title="{{ $date_24_06 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_25_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_25_06)) !!}"
                    title="{{ $date_25_06 }}">25</a></td>
                @else
                <td class="dia_25">25</td>
                @endif


                @if (isset($date_26_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_06)) !!}"
                    title="{{ $date_26_06 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

                @if (isset($date_27_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_06)) !!}"
                    title="{{ $date_27_06 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif

                @if (isset($date_28_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_06)) !!}"
                    title="{{ $date_28_06 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif

                @if (isset($date_29_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_29_06)) !!}"
                    title="{{ $date_29_06 }}">29</a></td>
                @else
                <td class="dia_29">29</td>
                @endif

                @if (isset($date_30_06))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_06)) !!}"
                    title="{{ $date_30_06 }}">30</a></td>
                @else
                <td class="dia_30">30</td>
                @endif

            </tr>
        </tbody>
        <tbody id="mes_7" class="mes">
            <tr class="mes_title">
                <td colspan="7">Julho</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>


                @if (isset($date_01_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_07)) !!}"
                    title="{{ $date_01_07 }}">1</a></td>
                @else
                <td class="dia_1">1</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_02_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_07)) !!}"
                    title="{{ $date_02_07 }}">2</a></td>
                @else
                <td class="dia_2">2</td>
                @endif

                @if (isset($date_03_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_07)) !!}"
                    title="{{ $date_03_07 }}">3</a></td>
                @else
                <td class="dia_3">3</td>
                @endif

                @if (isset($date_04_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_07)) !!}"
                    title="{{ $date_04_07 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif

                @if (isset($date_05_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_07)) !!}"
                    title="{{ $date_05_07 }}">4</a></td>
                @else
                <td class="dia_5">5</td>
                @endif

                @if (isset($date_06_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_07)) !!}"
                    title="{{ $date_06_07 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif

                @if (isset($date_07_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_07)) !!}"
                    title="{{ $date_07_07 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif

                @if (isset($date_08_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_07)) !!}"
                    title="{{ $date_08_07 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_09_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_07)) !!}"
                    title="{{ $date_09_07 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif

                @if (isset($date_10_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_07)) !!}"
                    title="{{ $date_10_07 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif


                @if (isset($date_11_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_07)) !!}"
                    title="{{ $date_11_07 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif


                @if (isset($date_12_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_07)) !!}"
                    title="{{ $date_12_07 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif


                @if (isset($date_13_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_07)) !!}"
                    title="{{ $date_13_07 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif


                @if (isset($date_14_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_07)) !!}"
                    title="{{ $date_14_07 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif


                @if (isset($date_15_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_07)) !!}"
                    title="{{ $date_15_07 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

            </tr>
            <tr>

                @if (isset($date_16_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_07)) !!}"
                    title="{{ $date_16_07 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif


                @if (isset($date_17_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_07)) !!}"
                    title="{{ $date_17_07 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif


                @if (isset($date_18_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_07)) !!}"
                    title="{{ $date_18_07 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif


                @if (isset($date_19_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_07)) !!}"
                    title="{{ $date_19_07 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif


                @if (isset($date_20_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_07)) !!}"
                    title="{{ $date_20_07 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif


                @if (isset($date_21_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_07)) !!}"
                    title="{{ $date_21_07 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif


                @if (isset($date_22_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_07)) !!}"
                    title="{{ $date_22_07 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif

            </tr>
            <tr>

                @if (isset($date_23_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_07)) !!}"
                    title="{{ $date_23_07 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif


                @if (isset($date_24_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_07)) !!}"
                    title="{{ $date_24_07 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif


                @if (isset($date_25_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_25_07)) !!}"
                    title="{{ $date_25_07 }}">25</a></td>
                @else
                <td class="dia_25">25</td>
                @endif


                @if (isset($date_26_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_07)) !!}"
                    title="{{ $date_26_07 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif


                @if (isset($date_27_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_07)) !!}"
                    title="{{ $date_27_07 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif


                @if (isset($date_28_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_07)) !!}"
                    title="{{ $date_28_07 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif


                @if (isset($date_29_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_29_07)) !!}"
                    title="{{ $date_29_07 }}">29</a></td>
                @else
                <td class="dia_29">29</td>
                @endif

            </tr>
            <tr>

                @if (isset($date_30_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_07)) !!}"
                    title="{{ $date_30_07 }}">30</a></td>
                @else
                <td class="dia_30">30</td>
                @endif


                @if (isset($date_31_07))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_31_07)) !!}"
                    title="{{ $date_31_07 }}">31</a></td>
                @else
                <td class="dia_31">31</td>
                @endif
            </tr>
        </tbody>
        <tbody id="mes_8" class="mes">
            <tr class="mes_title">
                <td colspan="7">Agosto</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                <td></td>
                <td></td>

                @if (isset($date_01_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_08)) !!}"
                    title="{{ $date_01_08 }}">1</a></td>
                @else
                <td class="dia_1">1</td>
                @endif


                @if (isset($date_02_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_08)) !!}"
                    title="{{ $date_02_08 }}">2</a></td>
                @else
                <td class="dia_2">2</td>
                @endif


                @if (isset($date_03_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_08)) !!}"
                    title="{{ $date_03_08 }}">3</a></td>
                @else
                <td class="dia_3">3</td>
                @endif

                @if (isset($date_04_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_08)) !!}"
                    title="{{ $date_04_08 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif


                @if (isset($date_05_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_08)) !!}"
                    title="{{ $date_05_08 }}">5</a></td>
                @else
                <td class="dia_5">5</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_06_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_08)) !!}"
                    title="{{ $date_06_08 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif

                @if (isset($date_07_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_08)) !!}"
                    title="{{ $date_07_08 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif

                @if (isset($date_08_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_08)) !!}"
                    title="{{ $date_08_08 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif


                @if (isset($date_09_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_08)) !!}"
                    title="{{ $date_09_08 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif


                @if (isset($date_10_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_08)) !!}"
                    title="{{ $date_10_08 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif

                @if (isset($date_11_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_08)) !!}"
                    title="{{ $date_11_08 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif

                @if (isset($date_12_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_08)) !!}"
                    title="{{ $date_12_08 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_13_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_08)) !!}"
                    title="{{ $date_13_08 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif

                @if (isset($date_14_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_08)) !!}"
                    title="{{ $date_14_08 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif

                @if (isset($date_15_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_08)) !!}"
                    title="{{ $date_15_08 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

                @if (isset($date_16_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_08)) !!}"
                    title="{{ $date_16_08 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif

                @if (isset($date_17_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_08)) !!}"
                    title="{{ $date_17_08 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif

                @if (isset($date_18_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_08)) !!}"
                    title="{{ $date_18_08 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

                @if (isset($date_19_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_08)) !!}"
                    title="{{ $date_19_08 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif
            </tr>
            <tr>
                @if (isset($date_20_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_08)) !!}"
                    title="{{ $date_20_08 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif

                @if (isset($date_21_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_08)) !!}"
                    title="{{ $date_21_08 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

                @if (isset($date_22_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_08)) !!}"
                    title="{{ $date_22_08 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif

                @if (isset($date_23_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_08)) !!}"
                    title="{{ $date_23_08 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif

                @if (isset($date_24_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_08)) !!}"
                    title="{{ $date_24_08 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

                @if (isset($date_25_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_25_08)) !!}"
                    title="{{ $date_25_08 }}">25</a></td>
                @else
                <td class="dia_25">25</td>
                @endif

                @if (isset($date_26_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_08)) !!}"
                    title="{{ $date_26_08 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_27_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_08)) !!}"
                    title="{{ $date_27_08 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif

                @if (isset($date_28_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_08)) !!}"
                    title="{{ $date_28_08 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif

                @if (isset($date_29_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_29_08)) !!}"
                    title="{{ $date_29_08 }}">29</a></td>
                @else
                <td class="dia_29">29</td>
                @endif

                @if (isset($date_30_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_08)) !!}"
                    title="{{ $date_30_08 }}">30</a></td>
                @else
                <td class="dia_30">30</td>
                @endif

                @if (isset($date_31_08))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_31_08)) !!}"
                    title="{{ $date_31_08 }}">31</a></td>
                @else
                <td class="dia_31">31</td>
                @endif
            </tr>
        </tbody>
        <tbody id="mes_9" class="mes">
            <tr class="mes_title">
                <td colspan="7">Setembro</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                @if (isset($date_01_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_09)) !!}"
                    title="{{ $date_01_09 }}">1</a></td>
                @else
                <td class="dia_1">1</td>
                @endif

                @if (isset($date_02_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_09)) !!}"
                    title="{{ $date_02_09 }}">2</a></td>
                @else
                <td class="dia_2">2</td>
                @endif

            </tr>
            <tr>

                @if (isset($date_03_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_09)) !!}"
                    title="{{ $date_03_09 }}">3</a></td>
                @else
                <td class="dia_3">3</td>
                @endif

                @if (isset($date_04_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_09)) !!}"
                    title="{{ $date_04_09 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif

                @if (isset($date_05_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_09)) !!}"
                    title="{{ $date_05_09 }}">5</a></td>
                @else
                <td class="dia_5">5</td>
                @endif

                @if (isset($date_06_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_09)) !!}"
                    title="{{ $date_06_09 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif

                @if (isset($date_07_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_09)) !!}"
                    title="{{ $date_07_09 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif

                <td class="evento"><a href="/site/eventos/MzQ=" title="Dia mundial da alfabetização">8</a></td>

                @if (isset($date_09_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_09)) !!}"
                    title="{{ $date_09_09 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif
            </tr>
            <tr>
                @if (isset($date_10_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_09)) !!}"
                    title="{{ $date_10_09 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif

                @if (isset($date_11_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_09)) !!}"
                    title="{{ $date_11_09 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif

                @if (isset($date_12_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_09)) !!}"
                    title="{{ $date_12_09 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif

                @if (isset($date_13_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_09)) !!}"
                    title="{{ $date_13_09 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif

                @if (isset($date_14_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_09)) !!}"
                    title="{{ $date_14_09 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif

                @if (isset($date_15_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_09)) !!}"
                    title="{{ $date_15_09 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

                @if (isset($date_16_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_09)) !!}"
                    title="{{ $date_16_09 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_17_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_09)) !!}"
                    title="{{ $date_17_09 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif

                @if (isset($date_18_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_09)) !!}"
                    title="{{ $date_18_09 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

                @if (isset($date_19_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_09)) !!}"
                    title="{{ $date_19_09 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif

                @if (isset($date_20_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_09)) !!}"
                    title="{{ $date_20_09 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif

                @if (isset($date_21_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_09)) !!}"
                    title="{{ $date_21_09 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

                @if (isset($date_22_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_09)) !!}"
                    title="{{ $date_22_09 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif

                @if (isset($date_23_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_09)) !!}"
                    title="{{ $date_23_09 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_24_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_09)) !!}"
                    title="{{ $date_24_09 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

                @if (isset($date_25_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_25_09)) !!}"
                    title="{{ $date_25_09 }}">25</a></td>
                @else
                <td class="dia_25">25</td>
                @endif

                @if (isset($date_26_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_09)) !!}"
                    title="{{ $date_26_09 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

                @if (isset($date_27_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_09)) !!}"
                    title="{{ $date_27_09 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif

                @if (isset($date_28_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_09)) !!}"
                    title="{{ $date_28_09 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif

                @if (isset($date_29_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_29_09)) !!}"
                    title="{{ $date_29_09 }}">29</a></td>
                @else
                <td class="dia_29">29</td>
                @endif

                @if (isset($date_30_09))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_09)) !!}"
                    title="{{ $date_30_09 }}">30</a></td>
                @else
                <td class="dia_30">30</td>
                @endif

            </tr>
            <tr></tr>
        </tbody>
        <tbody id="mes_10" class="mes">
            <tr class="mes_title">
                <td colspan="7">Outubro</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                @if (isset($date_01_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_10)) !!}"
                    title="{{ $date_01_10 }}">1</a></td>
                @else
                <td class="dia_1">1</td>
                @endif

                @if (isset($date_02_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_10)) !!}"
                    title="{{ $date_02_10 }}">2</a></td>
                @else
                <td class="dia_2">2</td>
                @endif

                @if (isset($date_03_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_10)) !!}"
                    title="{{ $date_03_10 }}">3</a></td>
                @else
                <td class="dia_3">3</td>
                @endif

                @if (isset($date_04_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_10)) !!}"
                    title="{{ $date_04_10 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif

                @if (isset($date_05_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_10)) !!}"
                    title="{{ $date_05_10 }}">5</a></td>
                @else
                <td class="dia_5">5</td>
                @endif

                @if (isset($date_06_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_10)) !!}"
                    title="{{ $date_06_10 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif

                @if (isset($date_07_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_10)) !!}"
                    title="{{ $date_07_10 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_08_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_10)) !!}"
                    title="{{ $date_08_10 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif

                @if (isset($date_09_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_10)) !!}"
                    title="{{ $date_09_10 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif

                @if (isset($date_10_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_10)) !!}"
                    title="{{ $date_10_10 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif

                @if (isset($date_11_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_10)) !!}"
                    title="{{ $date_11_10 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif

                @if (isset($date_12_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_10)) !!}"
                    title="{{ $date_12_10 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif

                @if (isset($date_13_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_10)) !!}"
                    title="{{ $date_13_10 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif

                @if (isset($date_14_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_10)) !!}"
                    title="{{ $date_14_10 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif
            </tr>
            <tr>
                @if (isset($date_15_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_10)) !!}"
                    title="{{ $date_15_10 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

                @if (isset($date_16_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_10)) !!}"
                    title="{{ $date_16_10 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif

                @if (isset($date_17_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_10)) !!}"
                    title="{{ $date_17_10 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif

                @if (isset($date_18_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_10)) !!}"
                    title="{{ $date_18_10 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

                @if (isset($date_19_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_10)) !!}"
                    title="{{ $date_19_10 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif

                @if (isset($date_20_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_10)) !!}"
                    title="{{ $date_20_10 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif

                @if (isset($date_21_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_10)) !!}"
                    title="{{ $date_21_10 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_22_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_10)) !!}"
                    title="{{ $date_22_10 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif

                @if (isset($date_23_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_10)) !!}"
                    title="{{ $date_23_10 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif

                @if (isset($date_24_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_10)) !!}"
                    title="{{ $date_24_10 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

                @if (isset($date_25_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_25_10)) !!}"
                    title="{{ $date_25_10 }}">25</a></td>
                @else
                <td class="dia_25">25</td>
                @endif

                @if (isset($date_26_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_10)) !!}"
                    title="{{ $date_26_10 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

                @if (isset($date_27_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_10)) !!}"
                    title="{{ $date_27_10 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif

                @if (isset($date_28_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_10)) !!}"
                    title="{{ $date_28_10 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_30_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_10)) !!}"
                    title="{{ $date_30_10 }}">30</a></td>
                @else
                <td class="dia_30">30</td>
                @endif



                @if (isset($date_31_10))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_31_10)) !!}"
                    title="{{ $date_31_10 }}">31</a></td>
                @else
                <td class="dia_31">31</td>
                @endif

            </tr>
        </tbody>
        <tbody id="mes_11" class="mes">
            <tr class="mes_title">
                <td colspan="7">Novembro</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>

                @if (isset($date_01_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_11)) !!}"
                    title="{{ $date_01_11 }}">1</a></td>
                @else
                <td class="dia_1">1</td>
                @endif

                <td class="evento"><a href="/site/eventos/MjM=" title="Dia dos Finados">2</a></td>

                @if (isset($date_02_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_11)) !!}"
                    title="{{ $date_02_11 }}">3</a></td>
                @else
                <td class="dia_3">3</td>
                @endif

                @if (isset($date_04_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_11)) !!}"
                    title="{{ $date_04_11 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_05_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_11)) !!}"
                    title="{{ $date_05_11 }}">5</a></td>
                @else
                <td class="dia_5">5</td>
                @endif

                @if (isset($date_06_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_11)) !!}"
                    title="{{ $date_06_11 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif

                @if (isset($date_07_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_11)) !!}"
                    title="{{ $date_07_11 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif


                @if (isset($date_08_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_11)) !!}"
                    title="{{ $date_08_11 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif



                @if (isset($date_09_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_11)) !!}"
                    title="{{ $date_09_11 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif

                @if (isset($date_10_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_11)) !!}"
                    title="{{ $date_10_11 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif

                <td class="evento"><a href="/site/eventos/MjQ="
                        title="Dia da Independência Nacional de Angola">11</a></td>

            </tr>
            <tr>

                @if (isset($date_12_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_11)) !!}"
                    title="{{ $date_12_11 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif

                @if (isset($date_13_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_11)) !!}"
                    title="{{ $date_13_11 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif

                @if (isset($date_14_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_11)) !!}"
                    title="{{ $date_14_11 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif

                @if (isset($date_15_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_11)) !!}"
                    title="{{ $date_15_11 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

                @if (isset($date_16_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_11)) !!}"
                    title="{{ $date_16_11 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif

                @if (isset($date_17_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_11)) !!}"
                    title="{{ $date_17_11 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif

                @if (isset($date_18_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_11)) !!}"
                    title="{{ $date_18_11 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_19_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_11)) !!}"
                    title="{{ $date_19_11 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif

                @if (isset($date_20_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_11)) !!}"
                    title="{{ $date_20_11 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif

                @if (isset($date_21_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_11)) !!}"
                    title="{{ $date_21_11 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

                @if (isset($date_22_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_11)) !!}"
                    title="{{ $date_22_11 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif

                @if (isset($date_23_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_11)) !!}"
                    title="{{ $date_23_11 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif

                @if (isset($date_24_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_11)) !!}"
                    title="{{ $date_24_11 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

                @if (isset($date_25_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_25_11)) !!}"
                    title="{{ $date_25_11 }}">25</a></td>
                @else
                <td class="dia_25">25</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_26_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_11)) !!}"
                    title="{{ $date_26_11 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

                @if (isset($date_27_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_11)) !!}"
                    title="{{ $date_27_11 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif

                @if (isset($date_28_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_11)) !!}"
                    title="{{ $date_28_11 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif

                @if (isset($date_29_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_29_11)) !!}"
                    title="{{ $date_29_11 }}">29</a></td>
                @else
                <td class="dia_29">29</td>
                @endif

                @if (isset($date_30_11))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_11)) !!}"
                    title="{{ $date_30_11 }}">30</a></td>
                @else
                <td class="dia_30">30</td>
                @endif

            </tr>
        </tbody>
        <tbody id="mes_12" class="mes">
            <tr class="mes_title">
                <td colspan="7">Dezembro</td>
            </tr>
            <tr class="dias_title">
                <td>Dom</td>
                <td>Seg</td>
                <td>Ter</td>
                <td>Qua</td>
                <td>Qui</td>
                <td>Sex</td>
                <td>Sab</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>


                  @if (isset($date_01_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_01_12)) !!}"
                    title="{{ $date_01_12 }}">1</a></td>
                @else
                <td class="dia_1">1</td>
                @endif

                @if (isset($date_02_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_02_12)) !!}"
                    title="{{ $date_02_12 }}">2</a></td>
                @else
                <td class="dia_2">2</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_03_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_03_12)) !!}"
                    title="{{ $date_03_12 }}">3</a></td>
                @else
                <td class="dia_3">3</td>
                @endif

                @if (isset($date_04_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_04_12)) !!}"
                    title="{{ $date_04_12 }}">4</a></td>
                @else
                <td class="dia_4">4</td>
                @endif

                @if (isset($date_05_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_05_12)) !!}"
                    title="{{ $date_05_12 }}">5</a></td>
                @else
                <td class="dia_5">5</td>
                @endif

                @if (isset($date_06_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_06_12)) !!}"
                    title="{{ $date_06_12 }}">6</a></td>
                @else
                <td class="dia_6">6</td>
                @endif

                @if (isset($date_07_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_07_12)) !!}"
                    title="{{ $date_07_12 }}">7</a></td>
                @else
                <td class="dia_7">7</td>
                @endif

                @if (isset($date_08_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_08_12)) !!}"
                    title="{{ $date_08_12 }}">8</a></td>
                @else
                <td class="dia_8">8</td>
                @endif

                @if (isset($date_09_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_09_12)) !!}"
                    title="{{ $date_09_12 }}">9</a></td>
                @else
                <td class="dia_9">9</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_10_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_10_12)) !!}"
                    title="{{ $date_10_12 }}">10</a></td>
                @else
                <td class="dia_10">10</td>
                @endif

                @if (isset($date_11_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_11_12)) !!}"
                    title="{{ $date_11_12 }}">11</a></td>
                @else
                <td class="dia_11">11</td>
                @endif

                @if (isset($date_12_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_12_12)) !!}"
                    title="{{ $date_12_12 }}">12</a></td>
                @else
                <td class="dia_12">12</td>
                @endif

                @if (isset($date_13_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_13_12)) !!}"
                    title="{{ $date_13_12 }}">13</a></td>
                @else
                <td class="dia_13">13</td>
                @endif

                @if (isset($date_14_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_14_12)) !!}"
                    title="{{ $date_14_12 }}">14</a></td>
                @else
                <td class="dia_14">14</td>
                @endif

                @if (isset($date_15_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_15_12)) !!}"
                    title="{{ $date_15_12 }}">15</a></td>
                @else
                <td class="dia_15">15</td>
                @endif

                @if (isset($date_16_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_16_12)) !!}"
                    title="{{ $date_16_12 }}">16</a></td>
                @else
                <td class="dia_16">16</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_17_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_17_12)) !!}"
                    title="{{ $date_17_12 }}">17</a></td>
                @else
                <td class="dia_17">17</td>
                @endif

                @if (isset($date_18_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_18_12)) !!}"
                    title="{{ $date_18_12 }}">18</a></td>
                @else
                <td class="dia_18">18</td>
                @endif

                @if (isset($date_19_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_19_12)) !!}"
                    title="{{ $date_19_12 }}">19</a></td>
                @else
                <td class="dia_19">19</td>
                @endif

                @if (isset($date_20_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_20_12)) !!}"
                    title="{{ $date_20_12 }}">20</a></td>
                @else
                <td class="dia_20">20</td>
                @endif



                @if (isset($date_21_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_21_12)) !!}"
                    title="{{ $date_21_12 }}">21</a></td>
                @else
                <td class="dia_21">21</td>
                @endif

                @if (isset($date_22_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_22_12)) !!}"
                    title="{{ $date_22_12 }}">22</a></td>
                @else
                <td class="dia_22">22</td>
                @endif

                @if (isset($date_23_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_23_12)) !!}"
                    title="{{ $date_23_12 }}">23</a></td>
                @else
                <td class="dia_23">23</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_24_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_24_12)) !!}"
                    title="{{ $date_24_12 }}">24</a></td>
                @else
                <td class="dia_24">24</td>
                @endif

                <td class="evento"><a href="/site/eventos/MjU=" title="Dia de Natal">25</a></td>

                @if (isset($date_26_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_26_12)) !!}"
                    title="{{ $date_26_12 }}">26</a></td>
                @else
                <td class="dia_26">26</td>
                @endif

                @if (isset($date_27_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_27_12)) !!}"
                    title="{{ $date_27_12 }}">27</a></td>
                @else
                <td class="dia_27">27</td>
                @endif



                @if (isset($date_28_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_28_12)) !!}"
                    title="{{ $date_28_12 }}">28</a></td>
                @else
                <td class="dia_28">28</td>
                @endif

                @if (isset($date_29_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_29_12)) !!}"
                    title="{{ $date_29_12 }}">29</a></td>
                @else
                <td class="dia_29">29</td>
                @endif

                @if (isset($date_30_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_30_12)) !!}"
                    title="{{ $date_30_12 }}">30</a></td>
                @else
                <td class="dia_30">30</td>
                @endif

            </tr>
            <tr>
                @if (isset($date_31_12))
                <td class="evento"><a href="{!! url('/evento/' . urlencode($date_31_12)) !!}"
                    title="{{ $date_31_12 }}">31</a></td>
                @else
                <td class="dia_31">31</td>
                @endif

            </tr>
        </tbody>
    </table>
</div>
