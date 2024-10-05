/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { dividePlayers } from './DividePlayersIntoTeamsOfEqualSkill.js'

TEST('Starting DividePlayersIntoTeamsOfEqualSkill test...', (t) => {
    //Test 1
    let want = 22
    let got = dividePlayers([3,2,5,1,3,4])
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 12
    got = dividePlayers([3,4])
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = -1
    got = dividePlayers([1,1,2,3])
    t.assert( want === got, "Expect: "+want)

    t.end()
})
