import React from 'react';
import { Link } from 'react-router-dom';

const EmptyCard = () => {
    return (
        <Link to="/bridges/new" className="bridge bridge-empty">
            <img src="/images/add.svg" alt="Add Bridge Icon" />
        </Link>
    );
};

export default EmptyCard;