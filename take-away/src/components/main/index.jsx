import React from 'react'
import './main.css'

import Cards from '../cards/'

const image = require('../../assets/prato1.jpg')

export default function Main() {
    return (
        <>
            <div className='main'>
                <Cards img={image} title="prato do dia"/>
                <Cards img={image} title="prato do dia"/>
                <Cards img={image} title="prato do dia"/>
            </div>
        </>
    )
}