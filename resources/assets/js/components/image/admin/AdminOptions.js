import React, {Component} from 'react';
import PropTypes from 'prop-types';
import Spinner from '../../../components/Spinner';

class AdminOptions extends Component {

    static propTypes = {
        updateImage: PropTypes.func.isRequired,
        deleteImage: PropTypes.func.isRequired,
        image: PropTypes.object.isRequired,
    };

    emulateInputOnChange = (event) => {
        this.inputElement.click();
    };

    render() {

        const {updateImage, deleteImage, image} = this.props;

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
                                    <Spinner
                                        width={14}
                                        height={14}/>
                                </span>
                        </div>
                        <div className="buttons">

                            <input id="update-icon"
                                   ref={input => this.inputElement = input}
                                   onChange={updateImage}
                                   type="file"
                                   accept="image/*"
                                   name="icon"/>
                            <a className="button-outline-white settings-button"
                               onClick={this.emulateInputOnChange}>UPDATE</a>

                            <a className="button-outline-delete settings-button button-left"
                               onClick={deleteImage}>DELETE</a>
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