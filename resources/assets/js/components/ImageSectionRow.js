import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { DropTarget } from 'react-dnd';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import Section from './Section';
import ImageCard from './ImageCard';
import { dropTarget } from '../helpers';
import { updateSectionOnImage, updateOrderOnImage } from '../reducers/Extra/ExtraActions';
import { reorderElement, changeSection} from '../reducers/Bridge/BridgeApiCalls';

class ImageSectionRow extends Component{

    constructor(props) {
        super(props);

        this.state = {
          images: []
        };

        this.pushCard = this.pushCard.bind(this);
        this.removeCard = this.removeCard.bind(this);
        this.moveCard = this.moveCard.bind(this);
    }

    componentWillReceiveProps(nextProps) {
      this.updateLocalState(nextProps);
    }

    componentWillMount() {
      this.updateLocalState(this.props);
    }

    updateLocalState(props) {
        this.setState({
          images: props.images
        });
    }

    pushCard(card) {
      const {
        bridge,
        section,
        updateSectionOnImage,
        changeSection
      } = this.props;
      updateSectionOnImage(bridge.id, card.id, section.id);
      changeSection('image', card.id, section.id);
    }

    removeCard(index) { }

    moveCard(dragIndex, hoverIndex) {
        const {
            images,
            bridge,
            section,
            updateOrderOnImage,
            reorderElement
        } = this.props;
        const card = images.find( image => image.order === dragIndex && image.section_id === section.id);
        updateOrderOnImage(bridge.id, card.id, hoverIndex);
        reorderElement('image', card.id, hoverIndex);
    }

    render() {
        const {
            bridge,
            section,
            emptyStateText,
            images,
            canDrop,
            isOver,
            connectDropTarget
        } = this.props;
        const isActive = canDrop && isOver;

        if(images === undefined)
            return (<div> </div>);

        return connectDropTarget(
            <div>
                <Section
                         bridge={bridge}
                         section={section}
                         isActive={isActive}
                         emptyStateText={emptyStateText}>
                    {
                        images.filter(image => ( image.section_id === section.id)).sort((a, b) => ( a.order - b.order )).map(image => {
                            return (
                              <ImageCard
                                  key={image.id}
                                  index={image.order}
                                  listId={image.section_id}
                                  card={image}
                                  bridge={bridge}
                                  removeCard={this.removeCard}
                                  moveCard={this.moveCard}
                              />
                            )
                        })
                    }
                </Section>
            </div>
        );
    }
}

ImageSectionRow.propTypes = {
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired,
    section: PropTypes.shape({
        id: PropTypes.number,
        order: PropTypes.number,
        title: PropTypes.string,
        description: PropTypes.string
    }).isRequired,
    images: PropTypes.arrayOf(PropTypes.shape({
        id: PropTypes.number,
        section_id: PropTypes.number,
        order: PropTypes.number
    })).isRequired,
    emptyStateText: PropTypes.string.isRequired
};

const dispatchToProps = (dispatch) => {
  return bindActionCreators({
    updateOrderOnImage,
    updateSectionOnImage,
    reorderElement,
    changeSection
  }, dispatch)
};

const imageSectionRow = dropTarget("IMAGE")(ImageSectionRow);

export default connect(state => state, dispatchToProps)(imageSectionRow);