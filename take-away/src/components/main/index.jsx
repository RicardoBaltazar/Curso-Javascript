import React from 'react'
import './main.css'

import Cards from '../cards/'

const image1 = require('../../assets/prato1.jpg')
const image2 = require('../../assets/img2.jpg')
const image3 = require('../../assets/img3.jpg')
const image4 = require('../../assets/Spinach-&-Ricotta-Cannelloni.jpg')
const image5 = require('../../assets/caldeirada.jpg')
const image6 = require('../../assets/frango.jpg')

export default function Main() {
    return (
        <>
            <div className='main'>
                <Cards img={image1} title="Torta de presunto"/>
                <Cards img={image2} title="Torta de abóbora"/>
                <Cards img={image3} title="Sopa de cordeiro tunisina"/>
                <Cards img={image4} title="Canelone de espinafre e ricota"/>
                <Cards img={image5} title="Caldeirada de Peixe com Rouille"/>
                <Cards img={image6} title="Cassarola de frango enchilado"/>
            </div>
        </>
    )
}