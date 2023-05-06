/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { predictPartyVictory } from './Dota2Senate.js'

TEST('Starting Dota2Senate test...', (t) => {
    //Test 1
    let want = "Radiant"
    let got = predictPartyVictory( "RD" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "Dire"
    got = predictPartyVictory( "RDD" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
