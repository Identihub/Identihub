import React, {Component} from 'react';
import PropTypes from 'prop-types';

import Spinner from '../../../components/Spinner';
import AssetBgColor from "./AssetBgColor";

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

    render() {
        const {updateIcon, deleteIcon, icon} = this.props;

        return (
            <div className="admin-option">
                <div className="sidebar-padding">
                    <div className="settings">
                        <div className="title">
                            <span>Admin</span>
                        </div>
                        <div className="featured">
                            <span>Featured Image</span>

                            <span id="checkbox">
                                    <Spinner width={14}
                                             height={14}/>
                                </span>
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

export default AdminOptions;