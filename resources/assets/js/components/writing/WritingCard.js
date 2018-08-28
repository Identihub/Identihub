import React, {Component} from 'react';
import {isPublic} from '../../helpers';
import {bindActionCreators} from "redux";
import {deleteWriting, updateWriting} from "../../reducers/Bridge/BridgeApiCalls";
import DebounceInput from 'react-debounce-input';

import {connect} from 'react-redux';

class WritingCard extends Component {

    state = {
        titleValue: '',
        descriptionValue: ''
    };

    componentWillReceiveProps(nextProps) {
        this.updateLocalState(nextProps.card);
    }

    componentWillMount() {
        this.updateLocalState(this.props.card);
    }

    updateLocalState = (card) => {
        this.setState({
            titleValue: card.title,
            descriptionValue: card.description,
        });
    };

    updateTitle = (e) => {
        const title = e.target.value;
        this.updateWriting(title, this.state.descriptionValue);
    };

    updateDescription = (e) => {
        const description = e.target.value;
        this.updateWriting(this.state.titleValue, description);
    };

    updateWriting = (title, description) => {

        if (!title) {
            alert('Title is required. Update failed.');
        }

        if (!description) {
            alert('Description is required. Update failed.');
        }

        const {updateWriting, bridge, card} = this.props;
        if (updateWriting) {
            updateWriting(bridge.id, card.id, {
                title: title,
                description: description,
            });
        }
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
                    <p className="public-writing-title">{this.state.titleValue}</p>
                );
            }

            if (this.state.descriptionValue) {
                descriptionInput = (
                    <p className="public-writing-description">{this.state.descriptionValue}</p>
                );
            }
        }


        if (!isPub) {
            return (
                <div className="card item writing" id="writing">

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
                    {titleInput}
                    {descriptionInput}

                    <div className="clearfix"/>
                </div>
            );
        }
    }
}

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        deleteWriting,
        updateWriting
    }, dispatch)
};

export default connect(state => state, dispatchToProps)(WritingCard);