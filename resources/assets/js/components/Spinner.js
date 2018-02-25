import React, {Component} from 'react';
import PropTypes from 'prop-types';

class Spinner extends Component {
    render() {
        return (
            <div>
                <div className="Spinner" style={{width: this.props.width, height: this.props.height}}>
                    <div className="Spinner-line Spinner-line--1">
                        <div className="Spinner-line-cog">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--left"/>
                        </div>
                        <div className="Spinner-line-ticker">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--center"/>
                        </div>
                        <div className="Spinner-line-cog">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--right"/>
                        </div>
                    </div>
                    <div className="Spinner-line Spinner-line--2">
                        <div className="Spinner-line-cog">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--left"/>
                        </div>
                        <div className="Spinner-line-ticker">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--center"/>
                        </div>
                        <div className="Spinner-line-cog">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--right"/>
                        </div>
                    </div>
                    <div className="Spinner-line Spinner-line--3">
                        <div className="Spinner-line-cog">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--left"/>
                        </div>
                        <div className="Spinner-line-ticker">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--center"/>
                        </div>
                        <div className="Spinner-line-cog">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--right"/>
                        </div>
                    </div>
                    <div className="Spinner-line Spinner-line--4">
                        <div className="Spinner-line-cog">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--left"/>
                        </div>
                        <div className="Spinner-line-ticker">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--center"/>
                        </div>
                        <div className="Spinner-line-cog">
                            <div className="Spinner-line-cog-inner Spinner-line-cog-inner--right"/>
                        </div>
                    </div>

                </div>
            </div>
        );
    }
}

Spinner.propTypes = {
    width: PropTypes.number.isRequired,
    height: PropTypes.number.isRequired
};
Spinner.defaultProps = {};

export default Spinner;
