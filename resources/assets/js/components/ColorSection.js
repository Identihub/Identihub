import React, { Component } from 'react';
import PropTypes from 'prop-types';
import SectionWrapper from './SectionWrapper';
import ColorSectionRow from './ColorSectionRow';
import { getSectionType } from '../reducers/SectionType/SectionTypeReducer';
import { connect } from 'react-redux';
import { filterSectionsWithSectionType, sortByOrder } from '../helpers';
import renderSection from '../HOC/renderSectionHOC'
import NotificationSystem from 'react-notification-system';
import {createIcon} from "../reducers/Bridge/BridgeApiCalls";
import {bindActionCreators} from "redux";
import {uploadIncscapePalette} from "../reducers/Bridge/BridgeApiCalls";

class ColorSection extends Component {

    constructor(params) {
        super(params);
        this.emptyStateText = "No colors found here, start by adding a new color.";
        this.addColor = this.addColor.bind(this);
        this.addInkscape = this.addInkscape.bind(this);
    }

    addColor() {
        const {
            bridge,
            history
        } = this.props;
        history.push('/project/' + bridge.id + '/add-color');
    }

    addInkscape(event) {
        let file = undefined;

        Object.entries(event.target.files).map(
            ([key, value]) => (
                value.name.split(".").pop() === 'gpl'
                    ? file = value
                    : this.iconNotification.addNotification({
                        message: `File ${_.truncate(value.name, 10)} was not accepted`,
                        level: 'error'
                    })
            )
        );

        const bridge = this.props.bridge;
        console.log("bridge, files", bridge, file);

        const uploadIncscapePalette = this.props.uploadIncscapePalette;
        // const files = event.target.files;

        uploadIncscapePalette(bridge.id, file)
    }

    render() {

        const {
            bridge,
            colorsSection
        } = this.props;

        let {
            colors,
            sections
        } = bridge;

        const {
            addColor,
            addInkscape,
            emptyStateText
        } = this;

        return (
            <SectionWrapper
                title="Colors"
                componentResources={[
                    {
                        title: "Add Color",
                        onClick: addColor
                    },
                    {
                        title: "Import Inkscape Palette",
                        onClick: () => this.inkscape.click()
                    },
                ]}
                addResource="Add Color"
                bridge={bridge}
                sectionType={colorsSection}
                canCreateSection={true}
                onResourceClick={addColor}>
                <input id="icon"
                       // multiple
                       ref={input => this.inkscape = input}
                       onChange={this.addInkscape}
                       type="file"
                       name="icon"/>
                {
                    sortByOrder(filterSectionsWithSectionType(sections, colorsSection)).map(function (section) {
                        return (
                            <ColorSectionRow
                                     section={section}
                                     key={section.id}
                                     bridge={bridge}
                                     colors={colors}
                                     emptyStateText={emptyStateText}/>
                        )
                    })
                }
                <NotificationSystem ref={(div) => this.iconNotification = div}/>
            </SectionWrapper>
        );
    }

}

const mapStateToProps = (state, _) => {
    return {
        colorsSection: getSectionType(state, "COLORS")
    }
};

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        uploadIncscapePalette
    }, dispatch)
};

ColorSection.propTypes = {
    colorsSection: PropTypes.shape({
      id: PropTypes.number
    }).isRequired,
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired
};

export default renderSection('colors')(connect(mapStateToProps, dispatchToProps)(ColorSection));