import React from 'react';
import { Link } from 'react-router-dom';

const EmptyCard = () => {
    return (
        <Link to="/projects/new" className="bridge bridge-empty">
            <img src="/images/add.svg" alt="Add Bridge Icon" />
        </Link>
    );
};

export default EmptyCard;