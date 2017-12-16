import React, {Component} from 'react';
import PropTypes from 'prop-types';
import DebounceInput from 'react-debounce-input';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import {createSection,
        deleteSection,
        updateSectionGroupDescription,
        updateSectionGroupTitle
} from '../reducers/Bridge/BridgeApiCalls';
import {isPublic} from '../helpers';

class SectionWrapper extends Component {

    constructor(params) {
        super(params);
        this.createSection = this.createSection.bind(this);
        this.updateSectionGroupTitle = this.updateSectionGroupTitle.bind(this);
        this.updateSectionGroupDescription = this.updateSectionGroupDescription.bind(this);
       // this.deleteSection = this.deleteSection.bind(this)
    }

    createSection() {
        const {
            bridge,
            sectionType,
            createSection
        } = this.props;
        createSection(bridge.id, sectionType.id);
    }

    updateSectionGroupTitle(e) {
         const {
            bridge,
            sectionType,
            updateSectionGroupTitle
        } = this.props;
        const title = e.target.value;
        updateSectionGroupTitle(bridge.id, sectionType.group_id, title);
    }

    updateSectionGroupDescription(e) {
        const {
            bridge,
            sectionType,
            updateSectionGroupDescription
        } = this.props;
        const description = e.target.value;
        updateSectionGroupDescription(bridge.id, sectionType.group_id, description);
    }

    render() {

        const {
            title,
            addResource,
            onResourceClick,
            canCreateSection,
            children,
            sectionType
        } = this.props;


        const {createSection} = this;
        const {updateSectionGroupTitle} = this;
        const {updateSectionGroupDescription} = this;

        const isPub = isPublic();

        let plusIcon = null;
        let tooltip = null;
        let name = null;
        let description = null;
        let group_name = ' - ';
        if (sectionType.group_name != "undefined") {
            group_name = sectionType.group_name;
        }

        if (!isPub) {
            plusIcon = (<img src="/images/plus.svg" width="19" height="19"/>);
            tooltip = (
                <div className="tooltip">
                    <ul>
                        <li onClick={onResourceClick}>{addResource}</li>
                        {
                            canCreateSection ? <li onClick={createSection}>Add new section</li> : ''
                        }
                    </ul>
                </div>
            );

            name = (
                <DebounceInput value={group_name}
                               className="input-ghost"
                               placeholder="Section Name"
                               debounceTimeout="3000"
                               minLength="4"
                               onChange={updateSectionGroupTitle}/>
            );
        }
        else {
            //show if the string is not empty

            if (!!this.state.titleValue) {
                name = (
                    <DebounceInput value={group_name}
                                   className="input-ghost"
                                   placeholder="Section Name"
                                   debounceTimeout="3000"
                                   minLength="4"
                                   disabled="true"
                                   onChange={updateSectionGroupTitle}/>
                );
            }


        }

        return (
            <div className="bridge-section">

                <div className="title">
                    <h2>{name}</h2>
                    {plusIcon}
                    {tooltip}
                </div>

                {children}

            </div>
        );
    }

}

SectionWrapper.propTypes = {
    title: PropTypes.string.isRequired,
    addResource: PropTypes.string.isRequired,
    onResourceClick: PropTypes.func.isRequired,
    sectionType: PropTypes.shape({
        id: PropTypes.number,
        group_id: PropTypes.number,
        group_name: PropTypes.string
    }).isRequired,
    bridge: PropTypes.shape({
        id: PropTypes.number
    }).isRequired,
    canCreateSection: PropTypes.bool
};

export const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        createSection,
        updateSectionGroupTitle,
        updateSectionGroupDescription
    }, dispatch)
};

export default connect(state => state, dispatchToProps)(SectionWrapper);