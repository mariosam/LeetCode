/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { coloredCells } from './CountTotalNumberOfColoredCells.js'

TEST('Starting CountTotalNumberOfColoredCells test...', (t) => {
    //Test 1
    let want = 1
    let got = coloredCells( 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 5
    got = coloredCells( 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
