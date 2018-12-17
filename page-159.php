<?php
/**
 * Page Template
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>


	<main>
        <style>
            .sponsor {
                background-color: gray;
            }            
            
            .two {
                border-left: 1px solid black;
                padding-left: 5px;
            }

            .two img {
                width: 150px;
                height: 90px;
                background-color: white;
                border: 1px solid black;
            }

            #two {
                float: left;
            }

            .part {
                display: inline-block;
                vertical-align: middle;
            }

            p {
                color: black;
            }

        </style>
        <div class='portfolio sponsor'>
            <div class='part one'>
                <p> Made by Welfare Services Club </p>
            </div>
            <div class ='part two'>
                <div id='two'>
                    <p>Welfare Services Club (WSC)</p>
        <!--                <ul>
                            <li>National Council of Social Service (NCSS)</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/NCSSlogo.jpg">
        <!--                    <li>WSC Alumni Association</li>
                            <li>People's Association Youth Movement (PAYM)</li>-->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/PAYM.jpg">
        <!--                </ul> -->
                </div>
                <div id='two'>
                    <p>Publicity and Publications (PnP)</p>
        <!--                <ul>
                            <li>National Youth Council</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/NYCS.jpg">
        <!--                </ul> -->
                </div>
                <div id='two'>
                    <p>RSP (Elders)</p>
        <!--                <ul>
                            <li>Peach Garden Group</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/peach.jpg">
        <!--                    <li>Unipack Pte Ltd</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/unipack.jpg">
        <!--                    <li>ITRADE</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/itrade.jpg">
        <!--                    <li>Universal Sovereign Trading Pte Ltd</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/pursoft.jpg">
        <!--                    <li>Borden Company Pre Ltd</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/borden.jpg">
        <!--                    <li>UIC Consumer Products Pte Ltd</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/uic.jpg">
        <!--                </ul> -->
                </div>
                <div id='two'>
                    <p>RSP (Youth)</p>
    <!--                <ul>
                        <li>Ministry of Social and Family Development (MSF)</li> -->
                            <img src="../wp-content/themes/stand-out/assets/img/spons-logos/msf.jpg">
    <!--                    <li>Brothers of St Gabriel's</li> -->
                            <img src="../wp-content/themes/stand-out/assets/img/spons-logos/stgab.jpg">
    <!--                    <li>Singapore Sailing Federation</li> -->
                            <img src="../wp-content/themes/stand-out/assets/img/spons-logos/SSF.jpg">
    <!--                    <li>British Patroleum (BP)</li> -->
                            <img src="../wp-content/themes/stand-out/assets/img/spons-logos/BP.jpg">
    <!--                </ul> -->
                </div>
                <div id='two'>
                    <p>RSP (Hearing Impaired)</p>
        <!--                <ul>
                            <li>National Youth Council</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/NYCS.jpg">
        <!--                </ul> -->
                </div>
                <div id='two'>
                    <p>Camp OutReach (COR)</p>
    <!--                <ul>
                        <li>National Youth Council</li> -->
                            <img src="../wp-content/themes/stand-out/assets/img/spons-logos/NYCS.jpg">
    <!--                    <li>City Development Limited</li> -->
                            <img src="../wp-content/themes/stand-out/assets/img/spons-logos/CDL.jpg">
    <!--                    <li>Lee Foundation</li> -->
                            <img src="../wp-content/themes/stand-out/assets/img/spons-logos/lee.jpg">
    <!--                    <li>Prudential</li> -->
                            <img src="../wp-content/themes/stand-out/assets/img/spons-logos/pru.jpg">
    <!--                </ul> -->
                </div>
                <div id='two'>
                    <p>RSP (Friends of Children)</p>
        <!--               <ul>
                            <li>National Youth Council</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/NYCS.jpg">
        <!--                    <li>People's Association</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/PA.jpg">
        <!--                    <li>Jurong Point Management Office</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/jp.jpg">
        <!--                </ul> -->
                </div>
                <div id='two'>
                    <p>Volunteer Management (VM)</p>
        <!--                <ul>
                            <li>National Youth Council</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/NYCS.jpg">
        <!--                    <li>People's Association</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/PA.jpg">
        <!--                </ul> -->
                </div>
                <div id='two'>
                    <p>Overseas Volunteering Expedition (OVE)</p>
        <!--                <ul>
                            <li>National Youth Council</li> -->
                                <img src="../wp-content/themes/stand-out/assets/img/spons-logos/NYCS.jpg">
        <!--                </ul> -->
                </div>
            </div>
    <!--        <br />
            <div class ='part'>
                <p>RSP (Visually Handicapped)</p>
            </div>
            <div class ='part'>
                <p>Ignite Change (IgC)</p>
            </div>
            
            <div class ='part'>
                <p>RSP (Physically Challenged)</p>
            </div>
            <div class ='part'>
                <p>RSP (Intellectually disabled)</p>
            </div> -->
            
        </div>
	</main>    
<?php get_footer(); ?>