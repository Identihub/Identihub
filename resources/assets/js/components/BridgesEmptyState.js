import React from 'react';
import { Link } from 'react-router-dom';

const BridgesEmptyState = () => {
    return (
        <div className="bridges-empty-state">
            <div>
                <img src="/images/tmp/empty_bridges.svg" width="500" />
            </div>
            <Link className="button button-blue" to="/projects/new">Create Bridge</Link>
        </div>
    );
};

export default BridgesEmptyState;