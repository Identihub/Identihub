import React, { Component } from 'react';
import PropTypes from 'prop-types';
import SectionWrapper from './SectionWrapper';
import { bindActionCreators } from 'redux';
import { getSectionType } from '../reducers/SectionType/SectionTypeReducer';
import { connect } from 'react-redux';
import ImageSectionRow from './ImageSectionRow';
import { filterSectionsWithSectionType, sortByOrder } from '../helpers';
import { createImage } from '../reducers/Bridge/BridgeApiCalls';
import renderSection from '../HOC/renderSectionHOC'

class ImageSection extends Component {

    constructor(params) {
        super(params);
        this.emptyStateText = "No Images found here, start by adding a new image.";
        this.inputElement = null;
        this.addImage = this.addImage.bind(this);
        this.emulateInputOnChange = this.emulateInputOnChange.bind(this);
    }

    addImage(event) {
        const bridge = this.props.bridge;
        const createImage = this.props.createImage;
        const file = event.target.files;
        createImage(bridge.id, file)
    }

    emulateInputOnChange(event) {
        this.inputElement.click();
    }

    render() {

        const {
            bridge,
            imagesSection
        } = this.props;

        let {
            images,
            sections
        } = bridge;

        const {
            emulateInputOnChange,
            emptyStateText
        } = this;

        return (
            <SectionWrapper
                title="Images"
                addResource="Add Image"
                onResourceClick={emulateInputOnChange}
                bridge={bridge}
                canCreateSection={true}
                sectionType={imagesSection}>
                <input id="icon"
                       multiple
                       ref={input => this.inputElement = input}
                       onChange={this.addImage}
                       type="file"
                       accept="image/png,image/jpg,image/jpeg"
                       name="image"/>
                {
                    sortByOrder(filterSectionsWithSectionType(sections, imagesSection)).map( section => {
                        console.log(section);
                        return (
                          <ImageSectionRow
                              key={section.id}
                              bridge={bridge}
                              section={section}
                              images={images}
                              emptyStateText={emptyStateText}/>
                        )
                    })
                }
            </SectionWrapper>
        );
    }

}

const mapStateToProps = (state, _) => {
  return {
    imagesSection: getSectionType(state, "IMAGES")
  }
};

ImageSection.propTypes = {
  imagesSection: PropTypes.shape({
    id: PropTypes.number
  }).isRequired,
  bridge: PropTypes.shape({
    id: PropTypes.integer
  }).isRequired
};

const dispatchToProps = (dispatch) => {
  return bindActionCreators({
    createImage
  }, dispatch)
};

export default renderSection('images')(connect(mapStateToProps, dispatchToProps)(ImageSection));