import React, { Component } from 'react';

class HamburgerMenu extends Component {
    render() {
        return (
            <div id="nav-icon3" className={this.props.open}>
                <span/>
                <span/>
                <span/>
                <span/>
            </div>
        )
    }
}

export default HamburgerMenu;