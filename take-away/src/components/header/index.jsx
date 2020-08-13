import React from 'react'
import './menu.css'

const img = require('../../assets/imgIlustration.png')

export default function Menu(){
    return (
        <>
        <header>
            <nav className='menu'>
                <h1>Foodfy</h1>
                <a href="">Mais Acessadas</a>
                <a href="">Receitas</a>
                <a href="">Cozinheiors</a>
            </nav>
            <div className='banner'>
                <div>
                    <h2>As melhores receitas</h2>
                <p>
                Esta com fome? escolha um de nossos <br/>
                melhores pratos e faça seu pedido! <br/>
                Temos uma variedade de pratos! <br/>
                </p>
                </div>
                <img src={img} alt="iamgen chefe de cozinha" className='image-banner'/>
            </div>
            <h3>Melhores Receitas</h3>
        </header>
        </>
    )
}