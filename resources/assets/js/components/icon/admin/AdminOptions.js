import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {bindActionCreators} from "redux";

import AssetBgColor from "./AssetBgColor";
import {updateIconDontUseFlag} from '../../../reducers/Bridge/BridgeApiCalls';

class AdminOptions extends Component {

    static propTypes = {
        updateIcon: PropTypes.func.isRequired,
        deleteIcon: PropTypes.func.isRequired,
        updateAssetBgColor: PropTypes.func.isRequired,
        icon: PropTypes.object.isRequired,
    };

    emulateInputOnChange = (event) => {
        this.inputElement.click();
    };

    onBgColorChange = (color) => {
        this.props.updateAssetBgColor(color);
    };

    markAsDontUse = (event) => {
        const {icon, updateIconDontUseFlag} = this.props;
        const is_checked = event.target.checked;
        updateIconDontUseFlag(icon.bridge_id, icon.id, is_checked)
    };

    render() {
        const {updateIcon, deleteIcon, icon} = this.props;

        return (
            <div className="admin-option">
                <div className="sidebar-padding">
                    <div className="settings">
                        <div className="title">
                            <span>Admin</span>
                        </div>

                        <div className="check-setting">
                            <div className="input-wrapper">
                                <input id="featured_thumbnail" type="checkbox" name="featured_thumbnail"
                                       className="checkbox-input"/>
                                <label htmlFor="featured_thumbnail" className="checkbox"/>
                                <label htmlFor="featured_thumbnail" className="txt-label">Featured Thumbnail</label>
                            </div>
                        </div>

                        <div className="check-setting">
                            <div className="input-wrapper">
                                <input id="dont_use" type="checkbox" name="dont_use" className="checkbox-input"
                                       onChange={this.markAsDontUse} defaultChecked={icon.dont_use}/>
                                <label htmlFor="dont_use" className="checkbox"/>
                                <label htmlFor="dont_use" className="txt-label">Don't Use</label>
                            </div>
                        </div>

                        <AssetBgColor onBgColorChange={this.onBgColorChange}
                                      selectedColor={icon.bg_color}/>

                        <div className="buttons">

                            <input id="update-icon"
                                   ref={input => this.inputElement = input}
                                   onChange={updateIcon}
                                   type="file"
                                   accept="image/*"
                                   name="icon"/>
                            <a className="button-outline-white settings-button"
                               onClick={this.emulateInputOnChange}>UPDATE</a>

                            <a className="button-outline-delete settings-button button-left"
                               onClick={deleteIcon}>DELETE</a>
                        </div>
                    </div>
                </div>
                <div id="sidebar-hr">
                    <hr/>
                </div>

            </div>
        );
    }
}

const mapDispatchToProps = (dispatch) => {
    return bindActionCreators({
        updateIconDontUseFlag
    }, dispatch)
};

export default connect(state => state, mapDispatchToProps)(AdminOptions);