import React, { Component } from 'react';
import PropTypes from 'prop-types';
import DebounceInput from 'react-debounce-input';
import CSSTransitionGroup from 'react-transition-group/CSSTransitionGroup';
import EmptySectionState from './EmptySectionState';
import { DropTarget } from 'react-dnd';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import {
    updateSectionTitle,
    updateSectionDescription,
    deleteSection
} from '../reducers/Bridge/BridgeApiCalls';
import ReactSVG from 'react-svg';
import { paramsChecker, isPublic } from '../helpers';

class Section extends Component {

    constructor(props) {
        super(props);

        this.state = {
            titleValue: '',
            descriptionValue: ''
        };

        this.updateTitle = this.updateTitle.bind(this);
        this.updateDescription = this.updateDescription.bind(this);
        this.deleteSection = this.deleteSection.bind(this);
    }

    componentWillReceiveProps(nextProps) {
        this.updateLocalState(nextProps.section);
    }

    componentWillMount() {
        this.updateLocalState(this.props.section);
    }

    updateLocalState(section) {
        if(section.title)
            this.setState({
                titleValue: section.title
            });

        if(section.description)
            this.setState({
                descriptionValue: section.description
            });
    }

    updateTitle(e) {
        const {
            bridge,
            section,
            updateSectionTitle
        } = this.props;
        const title = e.target.value;
        updateSectionTitle(bridge.id, section.id, title);
    }

    updateDescription(e) {
        const {
            bridge,
            section,
            updateSectionDescription
        } = this.props;
        const description = e.target.value;
        updateSectionDescription(bridge.id, section.id, description);
    }

    deleteSection(e) {
        const {
            bridge,
            section,
            deleteSection
        } = this.props;
        //console.log(bridge);
        deleteSection(bridge.id, section.id);
    }

    render() {

        const {
            updateTitle,
            updateDescription,
            deleteSection
        } = this;

        const {
            emptyStateText,
            isActive,
            section
        } = this.props;

        const isPub = isPublic();

        let canBeDeleted = (!this.props.children.length) && (section.order != 0);

        let canBeDeletedSection = ( <div> </div> );

        if(canBeDeleted && !isPub) {
            canBeDeletedSection = (
              <div className="delete" onClick={deleteSection}>
                  <ReactSVG
                      path="/images/close.svg"
                      className="backward"
                  />
              </div>
            );
        }

        let name = null;
        let description = null;

        if(!isPub){
            name = (
              <DebounceInput value={this.state.titleValue}
                             className="input-ghost background-light-gray-Hovered"
                             placeholder="Write a title"
                             debounceTimeout="3000"
                             minLength="4"
                             onChange={updateTitle}/>
            );
            description = (
              <DebounceInput spellCheck="false"
                             element="textarea"
                             className="input-ghost background-light-gray-Hovered"
                             value={this.state.descriptionValue}
                             placeholder="Description"
                             debounceTimeout="3000"
                             minLength="4"
                             onChange={updateDescription}/>
            );
        }
        else{
            //show if the string is not empty
            if(!!this.state.titleValue){
                name = (
                    <DebounceInput value={this.state.titleValue}
                                   className="input-ghost"
                                   placeholder="Write a title"
                                   debounceTimeout="3000"
                                   minLength="4"
                                   disabled="true"
                                   onChange={updateTitle}/>
                );
            }

            //show if the string is not empty
            if(!!this.state.descriptionValue){
                description = (
                    <DebounceInput spellCheck="false"
                                   element="textarea"
                                   className="input-ghost"
                                   value={this.state.descriptionValue}
                                   placeholder="Description"
                                   debounceTimeout="3000"
                                   minLength="4"
                                   disabled="true"
                                   onChange={updateDescription}/>
                );
            }
        }

        const flexBoxClassName = isActive ? 'flex active' : 'flex';

        return (
            <section className="content">
                { canBeDeletedSection }
                <div className="text">
                    {name}
                    {description}
                    <div className="clearfix"> </div>
                </div>
                <CSSTransitionGroup
                    className={flexBoxClassName}
                    transitionName="example"
                    transitionEnterTimeout={500}
                    transitionLeaveTimeout={300}>
                    { this.props.children.length ? this.props.children : <EmptySectionState emptyStateText={emptyStateText}/> }
                </CSSTransitionGroup>
                <div className="clearfix"> </div>
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

const dispatchToProps = (dispatch) => {
  return bindActionCreators({
    updateSectionTitle,
    updateSectionDescription,
    deleteSection
  }, dispatch)
};

export default connect(state => state, dispatchToProps)(Section);