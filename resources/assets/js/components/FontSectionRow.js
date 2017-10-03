import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { DropTarget } from 'react-dnd';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import Section from './Section';
import FontCard from './FontCard';
import { dropTarget } from '../helpers';
import { updateOrderOnFont } from '../reducers/Extra/ExtraActions';

class FontSectionRow extends Component{

    constructor(props) {
        super(props);

        this.state = {
          fonts: []
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
          fonts: props.fonts
        });
    }

    pushCard(card) {

    }

    removeCard(index) { }

    moveCard(dragIndex, hoverIndex) {
        const {
            fonts,
            bridge,
            updateOrderOnFont
        } = this.props;
        const card = fonts.find( font => font.order === dragIndex );
        updateOrderOnFont(bridge.id, card.id, hoverIndex);
    }

    render() {
        const {
            bridge,
            section,
            emptyStateText,
            fonts,
            canDrop,
            isOver,
            connectDropTarget
        } = this.props;
        const isActive = canDrop && isOver;

        return connectDropTarget(
            <div>
                <Section
                         bridge={bridge}
                         section={section}
                         isActive={isActive}
                         emptyStateText={emptyStateText}>
                    {
                        fonts.filter(font => ( font.section_id === section.id)).sort((a, b) => ( a.order - b.order )).map(font => {
                            return (
                              <FontCard
                                  key={font.id}
                                  index={font.order}
                                  listId={font.section_id}
                                  card={font}
                                  removeCard={this.removeCard}
                                  moveCard={this.moveCard}
                                  bridge={bridge}
                              />
                            )
                        })
                    }
                </Section>
            </div>
        );
    }
}

FontSectionRow.propTypes = {
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired,
    section: PropTypes.shape({
        id: PropTypes.number,
        order: PropTypes.number,
        title: PropTypes.string,
        description: PropTypes.string
    }).isRequired,
    fonts: PropTypes.arrayOf(PropTypes.shape({
        id: PropTypes.number,
        section_id: PropTypes.number,
        order: PropTypes.number
    })).isRequired,
    emptyStateText: PropTypes.string.isRequired
};

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        updateOrderOnFont
    }, dispatch)
};

const fontSectionRow = dropTarget("FONT")(FontSectionRow);

export default connect(state => state, dispatchToProps)(fontSectionRow);