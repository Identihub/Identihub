import React, {Component} from 'react';
import PropTypes from 'prop-types';
import DebounceInput from 'react-debounce-input';
import CSSTransitionGroup from 'react-transition-group/CSSTransitionGroup';
import EmptySectionState from './EmptySectionState';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import {updateSectionTitle, updateSectionDescription, deleteSection} from '../reducers/Bridge/BridgeApiCalls';
import ReactSVG from 'react-svg';
import {isPublic} from '../helpers';

class Section extends Component {

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

    shouldComponentUpdate(nextProps, nextState) {
        const {titleValue, descriptionValue} = this.state;
        return (nextState.titleValue !== titleValue || nextState.descriptionValue !== descriptionValue);
    }

    updateLocalState = (section) => {
        this.setState({
            titleValue: section.title ? section.title : this.state.title,
            descriptionValue: section.description ? section.description : this.state.description,
        });
    };

    updateTitle = (e) => {
        const {bridge, section, updateSectionTitle} = this.props;
        const title = e.target.value;
        updateSectionTitle(bridge.id, section.id, title);
    };

    updateDescription = (e) => {
        const {bridge, section, updateSectionDescription} = this.props;
        const description = e.target.value;
        updateSectionDescription(bridge.id, section.id, description);
    };

    deleteSection = () => {
        const {bridge, section, deleteSection} = this.props;
        deleteSection(bridge.id, section.id);
    };

    render() {
        const {updateTitle, updateDescription, deleteSection} = this;
        const {emptyStateText, isActive, section} = this.props;

        let isDeletable = (!this.props.children.length) && (section.order != 0);

        let isDeletableSection = (<div/>);

        if (isDeletable && !isPublic()) {
            isDeletableSection = (
                <div className="delete" onClick={deleteSection}>
                    <ReactSVG
                        path="/images/close.svg"
                        className="backward"/>
                </div>
            );
        }

        let nameInput = null;
        let descriptionInput = null;

        if (!isPublic()) {
            nameInput = (
                <DebounceInput value={this.state.titleValue}
                               className="input-ghost background-light-gray-Hovered"
                               placeholder="Write a title"
                               debounceTimeout="3000"
                               onChange={updateTitle}/>
            );
            descriptionInput = (
                <DebounceInput spellCheck="false"
                               element="textarea"
                               className="input-ghost background-light-gray-Hovered"
                               value={this.state.descriptionValue}
                               placeholder="Description"
                               debounceTimeout="3000"
                               onChange={updateDescription}/>
            );
        } else {
            if (this.state.titleValue) {
                nameInput = (
                    <DebounceInput value={this.state.titleValue}
                                   className="input-ghost"
                                   placeholder="Write a title"
                                   debounceTimeout="3000"
                                   disabled="true"
                                   onChange={updateTitle}/>
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
                                   disabled="true"
                                   onChange={updateDescription}/>
                );
            }
        }

        const flexClassName = isActive ? 'flex active' : 'flex';

        return (
            <section className="content">

                {isDeletableSection}

                <div className="text">

                    {nameInput}
                    {descriptionInput}

                    <div className="clearfix"/>
                </div>

                <CSSTransitionGroup
                    className={flexClassName}
                    transitionName="example"
                    transitionEnterTimeout={500}
                    transitionLeaveTimeout={300}>

                    {this.props.children.length ? this.props.children :
                        <EmptySectionState emptyStateText={emptyStateText}/>}

                </CSSTransitionGroup>

                <div className="clearfix"/>
            </section>
        );
    }
}

Section.propTypes = {
    section: PropTypes.shape({
        id: PropTypes.number,
        order: PropTypes.number,
        title: PropTypes.string,
        description: PropTypes.string
    }).isRequired,
    bridge: PropTypes.shape({
        id: PropTypes.number
    }).isRequired,
    isActive: PropTypes.bool.isRequired,
    emptyStateText: PropTypes.string.isRequired
};

const mapDispatchToProps = (dispatch) => {
    return bindActionCreators({
        updateSectionTitle,
        updateSectionDescription,
        deleteSection
    }, dispatch)
};

export default connect(state => state, mapDispatchToProps)(Section);