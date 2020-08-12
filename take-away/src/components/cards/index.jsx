import React from 'react'
import './cards.css'



export default function Cards(props) {
    return (
        <div className='cards'>
            <img className='image' src={props.img} alt="" />
            <p>{props.title}</p>
        </div>
    )
}