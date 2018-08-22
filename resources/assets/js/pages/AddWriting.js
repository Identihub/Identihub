import React, {Component} from 'react';
import {connect} from 'react-redux';
import PropTypes from 'prop-types';
import DebounceInput from 'react-debounce-input';
import {createWriting} from '../reducers/Bridge/BridgeApiCalls';

class AddWriting extends Component {
    constructor(props) {
        super(props);

        let bridge = JSON.parse(window.Laravel.bridge);

        this.state = {
            id: bridge.id,

            titleValue: '',
            descriptionValue: '',
        };
    }

    createWriting = () => {
        const bridgeId = this.state.id;

        if (this.validateInputs()) {
            this.props.dispatch(createWriting(bridgeId, this.state.titleValue, this.state.descriptionValue));
            this.closeWindow();
        }
    };

    updateTitle = (e) => {
        const title = e.target.value;

        this.setState({
            ...this.state,
            titleValue: title
        });
    };

    updateDescription = (e) => {
        const description = e.target.value;

        this.setState({
            ...this.state,
            descriptionValue: description
        });
    };

    closeWindow = () => {
        this.props.history.goBack();
    };

    validateInputs = () => {

        return !!this.state.titleValue &&
            !!this.state.descriptionValue;
    };

    render() {

        const closeWindow = this.closeWindow;
        const createWriting = this.createWriting;

        const buttonClassName = this.validateInputs() ? "button button-black" : "button button-white button-disabled";

        return (
            <div className="add-writing">
                <span onClick={closeWindow} className="overlay"> </span>
                <div className="dialog-box">
                    <img src="/images/close.svg" className="close-window" onClick={closeWindow}/>
                    <div className="wrapper">
                        <div className="input-wrapper">
                            <DebounceInput value={this.state.titleValue}
                                           className="input-ghost background-light-gray-Hovered"
                                           placeholder="Write a title"
                                           debounceTimeout="3000"
                                           onChange={this.updateTitle}/>
                        </div>

                        <div className="input-wrapper">
                            <DebounceInput spellCheck="false"
                                           element="textarea"
                                           className="input-ghost background-light-gray-Hovered"
                                           value={this.state.descriptionValue}
                                           placeholder="Description"
                                           debounceTimeout="3000"
                                           onChange={this.updateDescription}/>
                        </div>

                        <a onClick={createWriting} className={buttonClassName}> Add Writing </a>
                    </div>
                </div>
            </div>
        )
    }
}

const mapStateToProps = (state, ownProps) => {
    return {}
};

AddWriting.propTypes = {
    dispatch: PropTypes.func.isRequired
};

export default connect(mapStateToProps)(AddWriting);