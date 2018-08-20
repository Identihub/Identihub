import React, {Component} from 'react';
import {isPublic} from '../../helpers';
import {bindActionCreators} from "redux";
import {deleteWriting} from "../../reducers/Bridge/BridgeApiCalls";
import DebounceInput from 'react-debounce-input';

import {connect} from 'react-redux';

class WritingCard extends Component {

    state = {
        titleValue: '',
        descriptionValue: ''
    };

    componentWillReceiveProps(nextProps) {
        this.updateLocalState(nextProps.section);
    }

    componentWillMount() {
        this.updateLocalState(this.props.section);
    }

    updateLocalState = (section) => {
        this.setState({
            titleValue: "hello",
            descriptionValue: "hello desc",
        });
    };

    updateTitle = (e) => {
        const title = e.target.value;
    };

    updateDescription = (e) => {
        const description = e.target.value;
    };

    deleteWriting = () => {
        const {deleteWriting, bridge, card} = this.props;
        if (deleteWriting) {
            deleteWriting(bridge.id, card.id);
        }
    };

    render() {
        const isPub = isPublic();
        const {card, bridge} = this.props;
        const deleteWriting = this.deleteWriting;

        let titleInput = null;
        let descriptionInput = null;

        if (!isPublic()) {
            titleInput = (
                <DebounceInput value={this.state.titleValue}
                               className="input-ghost background-light-gray-Hovered"
                               placeholder="Write a title"
                               debounceTimeout="3000"
                               onChange={this.updateTitle}/>
            );
            descriptionInput = (
                <DebounceInput spellCheck="false"
                               element="textarea"
                               className="input-ghost background-light-gray-Hovered"
                               value={this.state.descriptionValue}
                               placeholder="Description"
                               debounceTimeout="3000"
                               onChange={this.updateDescription}/>
            );
        } else {
            if (this.state.titleValue) {
                titleInput = (
                    <DebounceInput value={this.state.titleValue}
                                   className="input-ghost"
                                   placeholder="Write a title"
                                   debounceTimeout="3000"
                                   disabled="true"/>
                );
            }

            if (this.state.descriptionValue) {
                descriptionInput = (
                    <DebounceInput spellCheck="false"
                                   element="textarea"
                                   className="input-ghost"
                                   value={this.state.descriptionValue}
                                   placeholder="Description"
                                   debounceTimeout="3000"
                                   disabled="true"/>
                );
            }
        }


        if (!isPub) {
            return (
                <div className="card item writing">

                    {titleInput}
                    {descriptionInput}

                    <div className="clearfix"/>

                    <span onClick={deleteWriting} className="delete-writing">
                        <i className="fas fa-trash-alt delete-handler"/>
                  </span>
                </div>
            );
        } else {
            return (
                <div className="item writing card">
                    <div className="text">

                        {titleInput}
                        {descriptionInput}

                        <div className="clearfix"/>
                    </div>
                </div>
            );
        }
    }
}

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        deleteWriting
    }, dispatch)
};

export default connect(state => state, dispatchToProps)(WritingCard);