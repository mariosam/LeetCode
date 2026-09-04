/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { uniformArray } from './ConstructUniformParityArrayI.js'

TEST('Starting ConstructUniformParityArrayI test...', (t) => {
    //Test 1
    let want = true
    let got = uniformArray( [2,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = uniformArray( [4,6] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
